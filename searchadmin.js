var XMLHttp = buatObjectXMLHttpRequest();
function buatObjectXMLHttpRequest()
	{
		var XMLHttp;
		if(window.ActiveXObject)
			{
				try
					{
						XMLHttp = new ActiveXObject("Microsoft.XMLHTTP");
					}
				catch(e)
					{
						XMLHttp = false;
					}
			}
		else
			{
				try
					{
						XMLHttp = new XMLHttpRequest();
					}
				catch(e)
					{
						XMLHttp = false;
					}
			}
		if(!XMLHttp)
			{
				alert ("Object XMLHttpRequest gagal dibuat");
			}
		else
			{
				return XMLHttp;
			}
	}
function proses()
	{
		if(XMLHttp.readyState == 4 || XMLHttp.readyState == 0)
			{
				keyword = encodeURIComponent(document.getElementById("keyword").value);
				database = encodeURIComponent(document.getElementById("database").value);
				
				XMLHttp.open("GET","search.php?keyword=" +keyword + "&database=" + database, true);
				XMLHttp.onreadystatechange = handleServerResponse;
				XMLHttp.send(null);
			}
		else
			{
				setTimeout('proses()', 100);
			}
	}
function handleServerResponse()
	{
		if(XMLHttp.readyState == 4)
			{
				if(XMLHttp.status == 200)
					{
						keyword = encodeURIComponent(document.getElementById("keyword").value);
						database = encodeURIComponent(document.getElementById("database").value);
						var XMLResponse = XMLHttp.responseXML;
						XMLRoot = XMLResponse.documentElement;
						
						id_bukuArray = XMLRoot.getElementsByTagName("id_buku");
						pengarangArray = XMLRoot.getElementsByTagName("pengarang");
						judul_bukuArray = XMLRoot.getElementsByTagName("judul_buku");
						penerbitArray = XMLRoot.getElementsByTagName("penerbit");
						statusArray = XMLRoot.getElementsByTagName("status");
						lokasi_rakArray = XMLRoot.getElementsByTagName("lokasi_rak");
						
						if(keyword == "")
							{
								html = "silahkan masukan keyword pencarian anda";
							}
						else if(judul_bukuArray.length == 0)
							{
								html = "<b><font color='red'>" + keyword + " </font></b>tidak ditemukan dalam database <b>" + database + "</b>";
							}
						else
							{
								html = "hasil pencarian " + '<b><font color="red"><i> ' + keyword + '</i></font></b> dalam database <b>' + database + "</b>\n" + "<table border='1'><tr><th>ID BUKU</th><th>PENGARANG</th><th>JUDUL BUKU</th><th>PENERBIT</th><th>EKSEMPLAR</th><th>LOKASI RAK</th></tr>";
								for(var i=0; i<judul_bukuArray.length; i++)
									{
										html += "<tr><td size='20'><a href='edit.buku.php?no="+id_bukuArray.item(i).firstChild.data +"' target='_blank'>" +id_bukuArray.item(i).firstChild.data +"</a></td><td size='60'>" + pengarangArray.item(i).firstChild.data +"</td><td size='90'>" +judul_bukuArray.item(i).firstChild.data +"</td><td size='50'> " + penerbitArray.item(i).firstChild.data + "</td><td>" + statusArray.item(i).firstChild.data +"</td><td>" + lokasi_rakArray.item(i).firstChild.data + "</td></tr>";
									}
								html = html + "</table>";
							}
						document.getElementById("hasil").innerHTML = html;
						setTimeout('proses()', 100);
					}
				else
					{
						alert ("ada masalah dalam koneksi ke server" + XMLHttp.statusText);
					}
			}
	}
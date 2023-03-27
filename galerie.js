// JavaScript Document
//galerie
/*
function index (getwidth, getheight)
{

no = window.open ('', 'zoom', 'left=100, top=100, width='+getwidth+', height='+getheight+','+
                   'toolbar=no, location=no, directories=no, status=no,'+
                   'menubar=no, scrollbars=no, resizable=no, copyhystory=no');

 with (no.document)
 {
  open ();
   write ('<?xml version="1.0" encoding="utf-8"?>\n');
   write ('<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">\n');
   write ('<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="cs">\n');
   write ('<head>\n\n');
   write ('<link rel="stylesheet" href="text_format.css" type="text/css" />\n')
   write (' <title>Dubrovník - Upozornění</title>\n\n');
   write (' <meta http-equiv="content-type"  content="application/xhtml+xml; charset=utf-8" />\n');
   write (' <meta http-equiv="pragma"        content="no-cache" />\n');
   write (' <meta http-equiv="cache-control" content="no-cache" />\n');
   write (' <meta http-equiv="expires"       content="-1" />\n\n');
   write ('</head>\n');
   write ('<body onclick="window.close();" style="margin:0px; padding-left:0px; padding-right:0px; padding-top:0px; padding-bottom:0px; text-align:left">\n');
   write ('<br /><strong>Tyto stránky byly pouzer tvořeny pouze jako školní projekt.<br /> K obrázkům a textům použitých na těchto stránkách si nepřivlastňujeme žádná práva!</strong>');
   write ('</body>\n');
   write ('</html>');
  close ();
 }
 no.document.focus();

} 
*/

function galerie (pat, cislo, getwidth, getheight)
{

 img = "dubrovnik"+cislo+".jpg";
 cisloa = cislo;
 cislop = cislo - 1;
 cislod = ++cislo;
 cislov = cislo;

 switch(cisloa){
 case "0" : {
 adresa1 = '';
 adresa2 = '<a class=\'galerie_obrazky\' href="javascript:galerie (\'\', \''+cislod+'\', \''+getwidth+'\', \''+getheight+'\')">další >></a>';
 break;
 }
   case "101" : {
 adresa1 = '<a class=\'galerie_obrazky\' href="javascript:galerie (\'\', \''+cislop+'\', \''+getwidth+'\', \''+getheight+'\')"><< předchozí</a>';
 adresa2 = '';
 break;
 }
  default : {
 adresa1 = '<a class=\'galerie_obrazky\' href="javascript:galerie (\'\', \''+cislop+'\', \''+getwidth+'\', \''+getheight+'\')"><< předchozí</a>';
 adresa2 = '<a class=\'galerie_obrazky\' href="javascript:galerie (\'\', \''+cislod+'\', \''+getwidth+'\', \''+getheight+'\')">další >></a>';
 break;
}
} 



 no = window.open ('', 'zoom', 'left=100, top=100, width='+getwidth+', height='+getheight+','+
                   'toolbar=no, location=no, directories=no, status=no,'+
                   'menubar=no, scrollbars=no, resizable=no, copyhystory=no');

 with (no.document)
 {
  open ();
   write ('<?xml version="1.0" encoding="utf-8"?>\n');
   write ('<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">\n');
   write ('<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="cs">\n');
   write ('<head>\n\n');
   write ('<script src="galerie.js" type="text/javascript"></script>\n');
   write ('<link rel="stylesheet" href="text_format.css" type="text/css" />\n')
   write (' <title>Dubrovník - Galerie</title>\n\n');
   write (' <meta http-equiv="content-type"  content="application/xhtml+xml; charset=utf-8" />\n');
   write (' <meta http-equiv="pragma"        content="no-cache" />\n');
   write (' <meta http-equiv="cache-control" content="no-cache" />\n');
   write (' <meta http-equiv="expires"       content="-1" />\n\n');
   write ('</head>\n');
   write ('<body style="margin:0px; padding-left:0px; padding-right:0px; padding-top:0px; padding-bottom:0px; text-align:center">\n');
   write ('<img src="images/galerie/'+img+'" alt="'+img+'" onclick="window.close();" />\n');
   write ('<span class=\'galerie_strany1\'>'+adresa1+'&nbsp;&nbsp;&nbsp;&nbsp;Aktuální obrázek: '+cislov+'/102&nbsp;&nbsp;&nbsp;&nbsp'+adresa2+'</span>\n');
   write ('</body>\n');
   write ('</html>');
  close ();
 }
 no.document.focus();
}


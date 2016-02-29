// JavaScript Document
/*  function right(e) {
    if (navigator.appName == 'Netscape' && (e.which == 2 || e.which == 3)) {
      alert("© Copyright. Propiedad exclusiva de Amigos inolvidables El portal del amor");
      return false;
    }
    else if (navigator.appName == 'Microsoft Internet Explorer' && (event.button==2 || event.button == 3)) {
      alert("© Copyright. Propiedad exclusiva de Amigos inolvidables El portal del amor ");
      return false;
    }
    return true;
  }
  document.onmousedown=right;
  if (document.layers) window.captureEvents(Event.MOUSEDOWN);
  window.onmousedown=right; */

  var agt=navigator.userAgent.toLowerCase();
  var is_major = parseInt(navigator.appVersion);
  var is_ns = ((agt.indexOf('mozilla')!=-1) && (agt.indexOf('spoofer')==-1)
            && (agt.indexOf('compatible') == -1) && (agt.indexOf('opera')==-1)
            && (agt.indexOf('webtv')==-1));
  var is_ns4up = (is_ns && (is_major >= 4));
  var is_ns5up = (is_ns && (is_major >= 5));
  var is_ie    = (agt.indexOf("msie") != -1);
  var is_ie4up = (is_ie  && (is_major >= 4));
  var fH  = (is_ie4up) ? 30 : 0;
  var ow  = 0;
  var oh  = 0;
  var pic = null;
  var features = "";

function openit(file, title) {
  
  features = "width=200,height=300,resizable=no";
  if (pic != null)
    {if (!pic.closed)
      {Hide();
       features = "resizable=no";}
    }
  if (document.layers) {features += ",dependent=yes";}
  picInit(file, title);
}

function picInit(file, title) {
  pic = window.open("","pic",features);
  pic.focus();
  pic.document.writeln("<HTML>");
  pic.document.writeln("<HEAD>");
  if (title == null) {title = "&nbsp;";}
  pic.document.writeln('<title>'+title+'<\/title>');
  pic.document.writeln("<\/HEAD>");
//  pic.document.writeln("<BODY onLoad='opener.hide()' onResize='opener.reSize()'>");
  pic.document.writeln("<BODY bgcolor='#FFFFFF'  onResize='opener.reSize()'>");
  pic.document.writeln("<div id='wait' class='wait' ><\/div>");
  pic.document.writeln("<div id='img' style='position:absolute; left: 10; top: 10'><\/div>");
//  pic.document.writeln("<div id='wait'><\/div>");
  pic.document.writeln("<\/body>");
  pic.document.writeln("<\/HTML>");
  pic.document.close();
  reSize();
  img = new Image();
  img.onload = showImg;
  img.src = file;
//  reSize();
}

function reSize() {
//  var iw = (is_ie4up) ? "100%" : pic.outerWidth+50;
//  var ih = (is_ie4up) ? "100%" : pic.outerHeight+50;
  var iw = (is_ie4up) ? pic.innerWidth+100 : "50%" ;
  var ih = (is_ie4up) ? pic.innerHeight+100 : "50%" ;
  var tx = "<table border=0 width='" + iw + "' height='" + ih + "'><tr align=center valign=middle><td><font color=#006600>Cargando Imagen ... Por Favor Espere!!<\/font><\/td><\/tr><\/table>";
  if (document.layers)
    {pic.document.layers["wait"].document.write(tx);
     pic.document.layers["wait"].document.close();}
  else
    {if (pic.document.getElementById)
       {pic.document.getElementById("wait").innerHTML = tx;}
     else
       {pic.document.all["wait"].innerHTML = tx;}
    }
}

function unHide() {
  if (document.layers)
    {pic.document.layers["img"].visibility  = "show";
     pic.document.layers["wait"].visibility = "hide";}
  else
    {if (pic.document.getElementById)
       {pic.document.getElementById("img").style.visibility  = "visible";
        pic.document.getElementById("wait").style.visibility = "hidden";}
     else
       {pic.document.all["img"].style.visibility  = "visible";
        pic.document.all["wait"].style.visibility = "hidden";}
    }
}

function Hide() {
  if (document.layers)
    {pic.document.layers["img"].visibility  = "hide";
     pic.document.layers["wait"].visibility = "show";}
  else
    {if (pic.document.getElementById)
       {pic.document.getElementById("img").style.visibility  = "hidden";
        pic.document.getElementById("wait").style.visibility = "visible";}
     else
       {pic.document.all["img"].style.visibility  = "hidden";
        pic.document.all["wait"].style.visibility = "visible";}
    }
}

function showImg() {
  avW = screen.availWidth;
  avH = screen.availHeight;
//  if (is_ie4up) avH -= 34;
  if (!document.layers)
    {avH = (is_ie4up) ? avH - 34 : avH - 2;}
  iH  = img.height ;
  iW  = img.width;
//alert("width = " + iW + "\nheight = " + iH);
  if (is_ns4up)
    {ow = pic.outerWidth  - pic.innerWidth;
     oh = pic.outerHeight - pic.innerHeight;
//     if (!is_ns5up)
//       {avW -= ow;
//        avH -= oh;}
     avW -= ow;
     avH -= oh;
    }
  if ((iW <= avW) && (iH <= avH))
    {w = iW;
     h = iH}
  else
    {if ((iW - avW) < (iH - avH))
       {scale = avH / iH;
        w     = iW * scale;
        h     = iH * scale;}
     else
       {scale = avW / iW;
        w     = iW * scale;
        h     = iH * scale;}
    }
  iW = w;
  iH = h;
//  if (is_ie4up)
//    {iW -= 16;
//     h  += 35;}
  if (!document.layers)
//    {iW = (is_ie4up) ? iW - 16 : iW - 14;
//     h  = (is_ie4up) ? h  + 35 : h  + 32;}
    {iW = (is_ie4up) ? iW - 0 : iW - 14;
     h  = (is_ie4up) ? h  + 70 : h  + 32;}
  pic.resizeTo(w+33, h+35);
  reSize();
//  centerIt();
  tx = '<IMG NAME="i1" SRC="' + img.src + '" border=0 height="' + iH + '" width="' + iW + '" onload="opener.unHide()"><br><br><center><a href="javascript:window.close()"><font color="#993300" size=2 face="arial"><b>Cerrar Ventana</b></font></a></center>';
  if (document.layers)
    {pic.document.layers["img"].document.write(tx);
     pic.document.layers["img"].document.close();}
  else
  {if (pic.document.getElementById)
       {pic.document.getElementById("img").innerHTML = tx;}
     else
       {pic.document.all["img"].innerHTML = tx;}
    }
}

function centerIt() {
  x = Math.round((avW - w) / 2);
  y = Math.round((avH - h + fH) / 2);
  if (x < 0) x = 0;
  if (y < 0) y = 0;
  pic.moveTo(x, y);
//  if (is_ns5up)
//    {pic.resizeBy(20, 20);
//     pic.resizeBy(-20, -20);}
}

/*
HTML Imagemapper 10 AJAX
alta4 Geoinformatik 2006
15.12.2006 - 10.0.24
http://www.alta4.com
*/
NBFRy="image_Con";i_123=null;function Bn99(t8sJ5,xf3o){var H$2=new Array();H$2["overflow"]="hidden";H$2["background"]="#fff";H$2["zIndex"]=0;cK0(t8sJ5,xf3o,NBFRy,null,H$2,h14G2);i_123=element(NBFRy)}function b$_4($w6,KSKm,vYT10,L8g,r0A){var img=M0R("img");img.src=vYT10;img.width=KSKm[0];img.height=KSKm[1];img.setAttribute("id",L8g[0]+'_'+L8g[1]);svSsR(img,$w6,null,null);qiM(r0A,img)}function $9$(src,size,id,href,alt){var img=M0R("img");img.src=src;if(size!=null){img.width=size[0];img.height=size[1]}if(id!=null)img.setAttribute("id",id);if(alt!=null)img.setAttribute("alt",alt);if(href!=null){var $5y=M0R("a");$5y.setAttribute("href",href);qiM($5y,img);return $5y}else return img}function km47(id,R8I){if(element(id[0]+"_"+id[1])){var img=element(id[0]+"_"+id[1]).style;img.left=ps83x(img.left)+R8I[0]+"px";img.top=ps83x(img.top)+R8I[1]+"px"}}function _021(id,R8I){if(element(id[0]+"_"+id[1])){var $_5=element(id[0]+"_"+id[1]);$_5.width=$_5.width+R8I[0];$_5.height=$_5.height+R8I[1]}}function v75(id,src){if(element(id[0]+"_"+id[1]))element(id[0]+"_"+id[1]).src=src}
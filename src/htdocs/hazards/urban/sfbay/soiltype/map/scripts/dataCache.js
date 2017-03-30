/*
HTML Imagemapper 10 AJAX
alta4 Geoinformatik 2006
15.12.2006 - 10.0.24
http://www.alta4.com
*/
WB89=false;s049=new Array();q5Y2B=0;function H7Ro8(){C1v$=new Array(g_dCLength)}function createitem_dataCache(id,name){if(typeof(C1v$[id])!="object"){C1v$[id]=new Array()}C1v$[id]["name"]=name;C1v$[id]["content"]=new Array()}function add_content(){var id=arguments[0];for(var i=1;i<arguments.length;i++){var item=arguments[i].split("||");C1v$[id]["content"][item[0]]=item[1]}Id00(id)}function add_bestView(id,n2I,coords){C1v$[id]["bestView"]=new Array();C1v$[id]["bestView"]["zL"]=n2I;C1v$[id]["bestView"]["coords"]=coords}function ir9(id){if(typeof(C1v$[id])=="object")return C1v$[id];return false}function T85b5(id){var dW_1=new Array();for(var item in C1v$[id]["content"]){dW_1.push(item)}return dW_1}
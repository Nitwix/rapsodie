$(document).ready(function(){
	var links = $("a");

	links.mouseover(function(event) {
		var str = event.target.innerHTML;

		event.target.innerHTML = colorStr(str,4);
	});

	links.mouseout(function(event) {
		event.target.innerHTML = event.target.id; //use the id of the text to be able to put it back onmouseout
	});

	var texts = $(".styled_text");
	texts.each(function(index, el) {
		el.innerHTML = colorStr(el.innerHTML,10);
	});

});




function colorStr(str, prob){
	var nStr = "";
	var finished = false;
	for(var i in str){

		//prevent html elements from being messed up
		if(str[i] == "<" || finished){
			finished = true;
			continue;
		}

		if(randInt(0,prob) == 0){ //randomly set the color
			//choose between the two colors
			if(randInt(0,2) == 0){
				nStr += "<span style='color:#CA8F08'>"+str[i]+"</span>"; //orange
			}else{
				nStr += "<span style='color:#38B73E'>"+str[i]+"</span>"; //green
			}
		}else{
			nStr += str[i];
		}
	}
	return nStr;
}

function randInt(min,max){
	return Math.floor(Math.random()*(max-min)+min);
}

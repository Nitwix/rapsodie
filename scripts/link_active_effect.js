var links = $("a");

links.mouseover(function(event) {
	var str = event.target.innerHTML;
	var nStr = "";
	for(var i in str){
		if(randInt(0,parseInt(str.length/3)) == 0){ //randomly set the color
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
	event.target.innerHTML = nStr;
});

links.mouseout(function(event) {
	event.target.innerHTML = event.target.id; //use the id of the text to be able to put it back onmouseout
});



function randInt(min,max){
	return Math.floor(Math.random()*(max-min)+min);
}

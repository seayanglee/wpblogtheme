/*
Theme Name: mytheme
Theme URI: http://www.lsychina.com
Author: SiyangLee
License: GNU General Public License
Version: 2.0
*/

// 滚回页面顶部
function gotoPageTop() {
	scroll(0,0);
}


// 显示二维码
function open2DCode() {
	document.getElementById("erweima").style.display = "block";
}

// 隐藏二维码
function close2DCode() {
	document.getElementById("erweima").style.display = "none";
}

// 将网站添加入收藏夹
function addFavorate() {
	var d=document.title;
	var a=document.URL;
	var b=navigator.userAgent.toLowerCase();
	if(b.indexOf("msie 8")>-1) {
		external.AddToFavoritesBar(a,d,"");
	}
	else if(window.opera) {
		return true;
	}
	else {
		try {
			window.external.addFavorite(a,d);
		}
		catch(c) {
			try {
				window.sidebar.addPanel(d,a,"");
			}
			catch(c) {
				alert("\u60a8\u7684\u6d4f\u89c8\u5668\u4e0d\u652f\u6301\u6b64\u529f\u80fd\uff0c\u8bf7\u4f7f\u7528 Ctrl+D \u8fdb\u884c\u6dfb\u52a0");
			}
		}
	}
	return false;
}

// 显示子菜单
function showSubMenu(index) {
	var menuDiv = document.getElementsByName("subMenu");
	if(menuDiv.item(index).style.display == "block") {
		menuDiv.item(index).style.display = "none";
		return;
	}
	for(var i=0; i<menuDiv.length; i++) {
		menuDiv.item(i).style.display = "none";
	}
	menuDiv.item(index).style.display = "block";
}

// 显示标签块颜色
function tagsColor() {
	var tagSpan = document.getElementsByName("tags");
	for(var i=0; i<tagSpan.length; i++) {
		if(i%5 == 0) tagSpan.item(i).style.backgroundColor = "#6cf";
		else if(i%5 == 1) tagSpan.item(i).style.backgroundColor = "#9c6";
		else if(i%5 == 2) tagSpan.item(i).style.backgroundColor = "#ff6";
		else if(i%5 == 3) tagSpan.item(i).style.backgroundColor = "#99f";
		else tagSpan.item(i).style.backgroundColor = "#f66";
	}
}

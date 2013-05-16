/*
Theme Name: mytheme
Theme URI: http://www.lsychina.com
Author: SiyangLee
License: GNU General Public License
Version: 2.1
*/

/* 滚回页面顶部 */
function gotoPageTop() {
	var t = self.setInterval(function() {
		if(document.documentElement.scrollTop + document.body.scrollTop == 0) window.clearInterval(t);
		window.scrollBy(0, -200);
	}, 5);
}

/* 显示二维码 */
function showEweima() {
	document.getElementById('erweima').style.display = 'block';
}

/* 隐藏二维码 */
function hiddenEweima() {
	document.getElementById('erweima').style.display = 'none';
}

/* 将网站添加入收藏夹 */
function addFavorate() {
	var d = document.title,
		a = document.URL,
		b = navigator.userAgent.toLowerCase();
	if(b.indexOf('msie 8') > -1) {
		external.AddToFavoritesBar(a, d, '');
	}
	else if(window.opera) {
		var f = document.getElementById('addfav');
		f.href = a;
		f.title = d;
		return true;
	}
	else {
		try {
			window.external.addFavorite(a, d);
		}
		catch(c) {
			try {
				window.sidebar.addPanel(d, a, '');
			}
			catch(c) {
				alert('\u60a8\u7684\u6d4f\u89c8\u5668\u4e0d\u652f\u6301\u6b64\u529f\u80fd\uff0c\u8bf7\u4f7f\u7528 Ctrl+D \u8fdb\u884c\u6dfb\u52a0');
			}
		}
	}
	return false;
}

/* 显示子菜单 */
function showSubMenu(event, x) {
	var e = window.event || event;
    if(e.stopPropagation) {
    	e.stopPropagation();
    }
	else {
		e.cancelBubble = true;
	}
	var m = document.getElementsByName('submenu');
	if(m.item(x).style.display == 'block') {
		m.item(x).style.display = 'none';
		return;
	}
	for(var i=0; i<m.length; i++) {
		m.item(i).style.display = 'none';
	}
	m.item(x).style.display = 'block';
}

/* 点击空白处隐藏子菜单 */
document.onclick = function() {
	var m = document.getElementsByName('submenu');
	for(var i=0; i<m.length; i++) {
		m.item(i).onclick = function(event) {
			var e = window.event || event;
			if(e.stopPropagation) {
				e.stopPropagation();
			}
			else {
				e.cancelBubble = true;
			}
		};
		m.item(i).style.display = 'none';
	}
};

/* 显示标签块颜色 */
window.onload = function() {
	var t = document.getElementsByName('tags');
	for(var i=0; i<t.length; i++) {
		if(i%5 == 0) t.item(i).style.backgroundColor = '#6cf';
		else if(i%5 == 1) t.item(i).style.backgroundColor = '#9c6';
		else if(i%5 == 2) t.item(i).style.backgroundColor = '#ff6';
		else if(i%5 == 3) t.item(i).style.backgroundColor = '#99f';
		else t.item(i).style.backgroundColor = '#f66';
	}
}

/* 改变搜索框颜色 */
document.getElementById('s').onfocus = function() {
	document.getElementById('search').style.borderColor = '#39c';
};
document.getElementById('s').onblur = function() {
	document.getElementById('search').style.borderColor = '#ccc';
};

/* 调整留言框位置 */
window.onscroll = function() {
	var h1 = document.getElementById('respond').getBoundingClientRect().top,
		h2 = document.getElementById('response').getBoundingClientRect().top,
		h3 = document.getElementById('respond').getBoundingClientRect().bottom,
		h4 = document.getElementById('response').getBoundingClientRect().bottom,
		h5 = 32;  // height of menubar
	if(document.body.scrollWidth > 1000) {
		if(document.getElementById('response').offsetHeight > document.getElementById('respond').offsetHeight) {
			if((h2-h5<12 && h3<h4) || (h1-h5>12 && h3==h4)) {  // set to 'fixed'
				document.getElementById('respond').style.cssText = 'position:fixed; top:44px; left:682px;';
			}
			else if(h2-h5 > 12) {  // set to 'absolute' at top
				document.getElementById('respond').style.cssText = 'position:absolute; top:46px; right:12px;';
			}
			else if(h3 >= h4) {  // set to 'absolute' at bottom
				document.getElementById('respond').style.cssText = 'position:absolute; top:auto; bottom:12px; right:12px;';
			}
		}
	}
}

/* 由屏幕尺寸调整样式 */
window.onresize = function() {
	if(document.body.scrollWidth <= 1000) {
		document.getElementById('header').style.position = 'absolute';
		document.getElementById('menubar').style.position = 'absolute';
		document.getElementById('menubar').style.cssText = 'position:"absolute"; left:"-200px;"';
		document.getElementById('respond').style.cssText = 'position:"static"';
		document.getElementById('respond').className = 'comment-add comment-add-full';
		document.getElementById('response').style.cssText = "width:auto; min-height:auto;";
	}
	else {
		document.getElementById('header').removeAttribute('style');
		document.getElementById('menubar').removeAttribute('style');
		document.getElementById('btnbar').removeAttribute('style');
		document.getElementById('respond').className = 'comment-add comment-add-half';
		document.getElementById('response').removeAttribute('style');
	}
}

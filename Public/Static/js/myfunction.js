// hero functions -s
// 清除所有子节点
function cleanAllChild(element){   
	while(element.hasChildNodes()) {
		element.removeChild(element.firstChild);
	}
}

// 获取已选中的复选框存入数组
function checkHero(check_elements) {
	var checked_array = [];
	var i, j;
	for (i = 0, j = 0; i < check_elements.length; i++) {
		if (check_elements[i].checked) {
			checked_array[j] = check_elements[i];
			j++
		}
	}
	
	return checked_array;
}

// 将数组中的复选框值提取, 存入显示区
function writeShow (obj, show_array) {

	var hideExampleHero = document.getElementById('hide_hero_show');
	delete hideExampleHero.id;
	var newHide;
	var show_str, i, para, node;
	show_str = '';
	
	// 移除该对象所有子节点
	cleanAllChild(obj);
	
	console.log(show_array);
	// hideExampleHero.removeAttribute('name');
	// 添加子节点
	for (i = 0; i < show_array.length; i++) {
		show_str =  show_str + show_array[i].getAttribute('data-name') + ', ';
		newHide = hideExampleHero.cloneNode(true);
		newHide.removeAttribute('id');
		// delete newHide.id;
		newHide.value=show_array[i].value;
		newHide.setAttribute('name', 'hero_id[]');
		// 添加隐藏域
		obj.appendChild(newHide);
		
		
	}
	
	// 添加文本
	para=document.createElement("p");
	node=document.createTextNode(show_str);
	para.appendChild(node);
	obj.appendChild(para);
	
	
}
// hero functions -e

//工具: 获取子节点
function getChild(obj, tagname){
	var children = obj.childNodes;
	var returns = new Array();
	var childReturn = new Array();
	
	for(var i = 0, j = 0; i < children.length; i++){
		if(children[i].nodeName.toLowerCase() == tagname.toLowerCase()){
			returns[j] = children[i];
			j++;
		}
		if(children[i].childNodes.length > 0){
			childReturn = getChild(children[i], tagname);
			if(childReturn.length > 0){
				returns = returns.concat(childReturn);
			}
		}
	}

	
	
	return returns;
}



//获取下一层子节点
function getFirstLevelChild(obj, tagname){
	var children = obj.childNodes;
	var returns = new Array();
	// console.log(children);
	for(var i = 0, j = 0; i < children.length; i++){
		if(children[i].nodeName.toLowerCase() == tagname.toLowerCase()){
			returns[j] = children[i];
			j++;
		}
	}
	
	return returns;
}

// 获取父元素
function getParent(obj, parentTag){
	//console.log(obj);
	//alert();
	var returns;
	var _parent = obj.parentNode;
	//console.log(_parent);
	//console.log(_parent.nodeName);
	if(_parent.nodeName.toLowerCase() == parentTag.toLowerCase()){
		returns = _parent;
	}else{
		returns = getParent(_parent, parentTag);
	}
	return returns;
}

// 清除空白子节点
function cleanWhitespace(element)   
{   
    for(var i=0; i<element.childNodes.length; i++)   
    {   
        var node = element.childNodes[i];   
        if(node.nodeType == 3 && !/\S/.test(node.nodeValue))   
        {   
            node.parentNode.removeChild(node);   
        }   
    }   
}
   window.onload=function(){

    var box=document.getElementById('box');
    var uls=document.getElementById('box').getElementsByTagName('ul');
    var imgs=uls[0].getElementsByTagName('li');
    var btn=uls[1].getElementsByTagName('li');
    var i=index=0;//中间量，统一声明
    var play=null;
    console.log(box,uls,imgs,btn);
  
    //图片切换
    function show (a) {
    	for(i=0;i<btn.length;i++){
    		btn[i].className='';
    		btn[a].className='current';
    	}
    	for(i=0;i<imgs.length;i++){
    		imgs[i].style.opacity=0;
    		imgs[a].style.opacity=1;
    	}
    }
    //切换按钮功能，响应对应图片
    for(i=0;i<btn.length;i++){
    	btn[i].index=i;
    	btn[i].onmouseover=function(){
    		show(this.index);
    		clearInterval(play);
    	}
    }
    //自动轮播方法
    function autoPlay(){
    	play=setInterval(function(){
    		index++;
    		index>=imgs.length&&(index=0);
    		show(index);
    	},3000)
    }
    autoPlay();
    box.onmouseover=function(){
    	clearInterval(play);
    };
    box.onmouseout=function(){
    	autoPlay();
    };
        }
const close2 = document.getElementById('close2');
const bar2 = document.getElementById('bar2');
const nav2 = document.getElementById('navbar2');
const nav3 = document.getElementById('navbar3');
const close3 = document.getElementById('close3');
const bar3 = document.getElementById('bar3');

if(close2){
	close2.addEventListener('click',()=>{
		nav2.classList.remove('active');
	})
}
if(bar2){
	bar2.addEventListener('click',()=>{
		nav2.classList.add('active');
	})
}

if(close3){
	close3.addEventListener('click',()=>{
		nav3.classList.remove('active');
	})
}
if(bar3){
	bar3.addEventListener('click',()=>{
		nav3.classList.add('active');
	})
}


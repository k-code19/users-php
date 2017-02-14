var flagShow=false;

if (window.addEventListener) window.addEventListener("load", function(){
	document.form.addEventListener("submit", check, false);
	document.form.showAgree.addEventListener("click", show, false);
	
}, false);

function check(e){
	var flag;
	var msg="";
	var form=document.form;
	var el;
	
	while(1){
		flag=false;
		
		el=form.name;
		if(el.value.search(el.dataset.pattern)==-1) break;
		
		el=form.surname;
		if(el.value.search(el.dataset.pattern)==-1) break;
		
		el=form.patronymic;
		if(el.value.search(el.dataset.pattern)==-1) break;
		
		el=form.sex;
		flagSex=false;
		for(i=0;i<el.length;i++)
			if(el[i].checked) {flagSex=true; break;}
		if(!flagSex) {el=el[0]; break;}
		
		el=form.dob;
		if(el.value.search(el.dataset.pattern)==-1) break;

		el=form.sport;
		if(el.value=="none") break;
		
		el=form.agree;
		if(!el.checked) break;
		
		flag=true;
		break;
		
	}
	
	if (!flag) msg=el.dataset.msg;
	
	el=document.getElementById("error");
	if(msg!="") {
	el.className="error";
	el.innerHTML=msg;
	e.preventDefault();
	}
	else {
		el.className="notError";
		//alert("Спасибо за регистрацию!");
	}
}

function show(){
	if(!flagShow) document.getElementById("agreeText").className="show";
	else document.getElementById("agreeText").className="notError";
	flagShow=!flagShow;
}
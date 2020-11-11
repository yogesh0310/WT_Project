var regName = /^[a-zA-Z]+ [a-zA-Z]+$/
var regPh=/^([0|\+[0-9]{1,5})?([7-9][0-9]{9})$/;
var regEmail=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
var flag=0;



function validate() {
    		var name=document.getElementById('name').value;
    		var dept=document.getElementById("dept").value;
    		var prn=document.getElementById('prn').value;
    		var email=document.getElementById('email').value;
    		var password=document.getElementById('password').value;
    		var mob=document.getElementById('mob').value;
    		var year=document.getElementById('year').value;

    		 //	console.log(name+' '+dept+' '+prn+' '+email+' '+password+' '+mob);
    		if (!name || !dept || !prn || !email || !password || !mob) {
		        alert('Please fill all details');
		        return;
		    }
		    if (name.length < 3) {
		    		alert('Enter valid first name');
		    }
		    else if(!regPh.test(mob)){
		    	alert('Enter valid mobile number');
		    }
		    else if(!regEmail.test(email))
		    {
		    	alert("Enter valid email_id");
		    }
		    else{
		    	// alert('Success')
		    	let url ="insert.php?name="+name+"&mobile="+mob+"&email="+email+"&dept="+dept+"&prn="+prn+"&password="+password+"&year="+year;
		    	$.post(url,{},function(data){
		            console.log(data);
		            if(data)
		            {
		            	alert("Your registration is done successfully!");
		                flag=1;
		                document.getElementById('name').value='';
					    //document.getElementById('dept').value='';
					    document.getElementById('prn').value='';
					    document.getElementById('email').value='';
					    document.getElementById('password').value='';
					    document.getElementById('mob').value='';
		               
		            }
		            else
		            {
		                //console.log(data);
		                alert('Please enter valid details')
		               
		            }
		            
		        });
		    	
		    }	
		    if (flag==1) {
		    	 
		    	
		    }
		    
}
function validateFacultyField() {
        var name=document.getElementById('fname').value;
        var dept=document.getElementById("department").value;
        var email=document.getElementById('email').value;
        var password=document.getElementById('pass').value;
        var mob=document.getElementById('mobile').value;
        var fid=document.getElementById('faculty_id').value;

         // console.log(name+' '+dept+' '+prn+' '+email+' '+password+' '+mob);
        if (!name || !email || !password || !mob || !fid) {
            alert('Please fill all details');
            return;
        }
        if (name.length < 3) {
            alert('Enter valid first name');
        }
        else if(!regPh.test(mob)){
          alert('Enter valid mobile number');
        }
        else if(!regEmail.test(email))
        {
          alert("Enter valid email_id");
        }
        else{
          // alert('Success')
          let url ="insertFaculty.php?name="+name+"&mobile="+mob+"&email="+email+"&dept="+dept+"&faculty_id="+fid+"&password="+password;
          $.post(url,{},function(data){
                console.log(data);
                if(data)
                {
                  alert("Your registration is done successfully!");
                    flag=1;
                    document.getElementById('fname').value='';
                    //document.getElementById('dept').value='';
                    document.getElementById('faculty_id').value='';
                    document.getElementById('email').value='';
                    document.getElementById('pass').value='';
                    document.getElementById('mobile').value='';
                   
                }
                else
                {
                    //console.log(data);
                    alert('Please enter valid details')
                   
                }
                
            });
          
        } 
        if (flag==1) {
           
          
        }
        
}
function showUI() {
	var sec=document.getElementById('change');
	$('#change').show();

}
function changePassword() {
	var old=document.getElementById('oldpass').value;
	var newp=document.getElementById('newpass').value;

	let url ="changePassword.php?old="+old+"&new="+newp;
    $.post(url,{},function(data){
        //console.log(data['status']);
        if(data)
        {
            alert("Your password is changed successfully!");
        }
        
        
    });
}
function changeFacultyPassword() {
	var old=document.getElementById('oldpass').value;
	var newp=document.getElementById('newpass').value;

	let url ="changePassword.php?old="+old+"&new="+newp+"&role=faculty";
    $.post(url,{},function(data){
        //console.log(data['status']);
        if(data)
        {
            alert("Your password is changed successfully!");
        }
        
        
    });
}

 function setValue() {
        var c1=document.getElementById('switch1').checked;
        var c2=document.getElementById('switch1');
        console.log(c1);
        if (c1 == true) {
          c2.value="yes";
        } else {
          c2.value="no";
        }
}
function showData(department) {
	$('#s1').show();
	
	var sub=document.getElementById('subjects').value;
	var dept=department;
	console.log(sub+" "+dept);
	let url="readall.php?dept="+dept+"&sub="+sub;
	$("#display tr:gt(0)").remove();
	$.get(url,function(data){
		console.log(data);
        let row=1;
        for(var i=0;i<data.length;i++)
       {
           var display=document.getElementById("display");
           var newrow=display.insertRow(row);
           var cell1=newrow.insertCell(0);
           var cell2=newrow.insertCell(1);
           var cell3=newrow.insertCell(2);
           var cell4=newrow.insertCell(3);
           var cell5=newrow.insertCell(4);
           var cell6=newrow.insertCell(5);
           var cell7=newrow.insertCell(6);

               cell1.innerHTML=data[i].Unit;
               cell2.innerHTML=data[i].file_name;
               cell3.innerHTML=data[i].file_size;
               cell4.innerHTML=data[i].docname;
               cell5.innerHTML=data[i].Time;
               cell6.innerHTML=data[i].Faculty_name;
               cell7.innerHTML="<a href='Upload/"+data[i].file_name+"'>"+data[i].file_name+"</a>";
               
 
               row++;
          
       }
    });
}
function showDataForFaculty(department) {
	$('#s1').show();
	
	var sub=document.getElementById('subjects').value;
	var dept=department;
	console.log(sub+" "+dept);
	let url="readall.php?dept="+dept+"&sub="+sub;
	$("#display tr:gt(0)").remove();
	$.get(url,function(data){
		console.log(data);
        let row=1;
        for(var i=0;i<data.length;i++)
       {
           var display=document.getElementById("display");
           var newrow=display.insertRow(row);
           var cell1=newrow.insertCell(0);
           var cell2=newrow.insertCell(1);
           var cell3=newrow.insertCell(2);
           var cell4=newrow.insertCell(3);
           var cell5=newrow.insertCell(4);
           var cell6=newrow.insertCell(5);
           var cell7=newrow.insertCell(6);

               cell1.innerHTML=data[i].Unit;
               cell2.innerHTML=data[i].file_name;
               cell3.innerHTML=data[i].file_size;
               cell4.innerHTML=data[i].docname;
               cell5.innerHTML=data[i].Time;
               cell6.innerHTML=data[i].Faculty_name;
               cell7.innerHTML="<a href='Upload/"+data[i].file_name+"'>"+data[i].file_name+"</a>";
               
 
               row++;
          
       }
    });
}
// function ObjectCreate(){
// 	const employee = { EmpID:"NEW123", EmpName:"John"}
// 	document.getElementById('result').innerHTML= employee.EmpID + ' ' + employee.EmpName;
// }

// function NewObject() {
// 	var empid = document.getElementById('employee_id').value;

//  	if(empid == '' ) {
//  		alert('Please fill the employee id');
// 		return false;
// 	}
// 	 else {
// 		const employee = new Object();
// 		employee.EmpId = 'NEW123';
// 		employee.EmpName = 'John';
// 		employee.EmpDepartment = 'Management';

// 		if(employee.EmpId == empid){
// 			document.getElementById('result').innerHTML = "Thank You";
// 			return false;
// 		} else{
// 			alert('sorry');
// 		}
       
// 	}
// }

// function MouseEvent{
//    alert('yes');

// }

 //second

// function GetArary() {
// 	const employee =["john",'harsh', "Mark" , "Jorin"];
// 	document.getElementById('result').innerHTML=employee;
// }

// function AraryLoop () {
// 	const Employee = ["john", "harsh" , "Mark" , "Jorin"];
// 	let EmpCount = Employee.length;

// 	let i,val;

// 	for (i=0; i<EmpCount; i++) {
// 		val +=Employee[i];
// 	}

// 	document.write(val);
// }

// function ObjectArray() {
// 	let i, j;
// 	const student = { name:"john" ,college:"SKIT", department:"CS", class:[{subject:"C-Programming", batch:"G-2", tutors:"Manish"}]}
 
//    for(i in student.class){
//    	 for(j in student.class[i].subject){
//    	 	document.write(student.class[i].subject[j]);
//    	 }
//    }
// }

//third

// get jQuery
// $(document).ready(function(){
// 	$('.getQuery').click(function() {
// 		$('#description').hide();
// 	});
// }); 


// $(document).ready(function() {

// 	$('#hide').click(function() {
// 		$('#description').hide(1000);
// 	});

// 	$('#show').click(function(){
// 		$('#description').show(1000);
// 	});

// 	// Toggle 
// 	$('#toggle').click(function() {
// 		$('#description').toggle(2000);
// 	});

// 	$('#fading').click(function() {
// 		$('#fade').fadeIn(5000);
// 		$('#fade').animate({left:'300px', height:'500px', width:'400px'});
// 	});

// 	// Callback Function

// 	$('#callBack').click(function() {
// 		$('#description').hide(2000, function() {
// 			alert('Operation Success');
// 		})
// 	});

// });


// Student Form Code

// $(document).ready(function() {
// 	$('#myform').on('submit', function() {
// 			var sname = $('#sname').val();
// 			var roll_num = $('#roll_num').val();
// 			var college_name = $('#college_name').val();
// 			var department = $('#department').val();
// 			var fee_amount = $('#fee_amount').val();

// 			if(sname == '') {
// 			$('#sname_error').text("Student name is required");
// 			// $('#sname_error').hide();
// 			return false;

// 			}else if(roll_num == '') {
// 			$('#roll_err').text("Roll Number is required");
// 			// $('#roll_err').hide();
// 			return false;

// 		}else if(college_name == '') {
// 			$('#college_err').text("college name is required");
// 			// $('#college_err').hide();
// 			return false;

// 		}else if(department == '') {
// 			$('#department_err').text("department name is required");
// 			// $('#department_err').hide();
// 			return false;	

// 		}else if(fee_amount == '') {
// 			$('#fee_err').text("fee amount is required");
// 			// $('#fee_err').hide();
// 			return false;

// 		} else {
// 			$('#sname_error').hide();
// 			$('#roll_err').hide();
// 			$('#college_err').hide();
// 			$('#department_err').hide();
// 			$('#fee_err').hide();
// 			return true;

// 		}

				
// 	});
// });

$(document).ready(function() {
	$('#myform').on('submit', function() {
			var student_name = $('#sname').val();
			var roll_num = $('#roll_num').val();
			var college_name = $('#college_name').val();
			var department = $('#department').val();
			var fee_amount = $('#fee_amount').val();

			if(student_name == '') {
				$('#sname_error').text('Please Fill the Student Name*');
				$('#sname_error').hide(5000);
				return false;
			} else if(roll_num == ''){
				$('#roll_error').text('Please Fill the Roll Number*');
				$('#roll_error').hide(5000);
				return false;
			}else if(college_name == ''){
				$('#college_error').text('Please Fill the Collage*');
				$('#college_error').hide(5000);
				return false;
			}else if(department == ''){
				$('#department_error').text('Please Fill the Department*');
				$('#department_error').hide(5000);
			
return false;
			}else if(fee_amount == ''){
				$('#fee_error').text('Please Fill the Fee Ammount*');
				$('#fee_error').hide(5000);
				return false;
			} else{
				$('#sname_error').hide();
				$('#roll_error').hide();
				$('#college_error').hide();
				$('#department_error').hide();
				$('#fee_error').hide();
				alert('Your Application has been Submited');

				$('#sname_error').text('your data has been submitted successfully');
				$('#table_data').preped('<tr><td>'+ sname + '</td><td>' + roll_num + '</td><td>');
				return false;
			}
	});
});

// $(document).ready(function() {
// 	$('#append').on('submit', function() {
// 		$('description').prepend('<p> dasljdladals </p>')

// 			});
// });

$(document).ready(function() {
	$('#append').on('submit', function() {
		$('description').append('')

   });
});



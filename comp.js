jQuery(document).ready(function($) {
	// function load data f_soft
	LOADdataFSOFT()

	// function edit data nsi

	
});

let NSI = 0
//$(".f-soft").hide()
/* 
 Global code
 tak taro disini karena ada bug function di document ready
*/

	function LOADdataFSOFT(){
	$.post('./conf/get-data-fsoft.php',function(data){
		$('.fsoft-list').html(data)
	})}



function editNSI(data_nsi){
		$('.fsoft-modul').fadeIn(300)
		NSI  = data_nsi;
		// $.get('./conf/get_data_fsoft_reEdit.php?nsikey='+data_nsi,function(data){
		// 	$('.fsoft-m-canvas').html(data)
		// })
		$.ajax({
			url: './conf/get_data_fsoft_reEdit.php',
			type: 'POST',
			data: {nsikey: data_nsi},
		})
		.done(function(data) {
			$('.fsoft-m-canvas').html(data)
		});
		
	}

	function fsClose(){
		$('.fsoft-modul').fadeOut(300)
	}
function saveFSOFT(){
	let value = [$('#fsoft-i-1').val(),$('#fsoft-i-2').val(),$('#fsoft-i-3').val(),$('#fsoft-i-4').val(),$('#fsoft-i-5').val(),$('#fsoft-i-6').val(),$('#fsoft-i-7').val(),$('#fsoft-i-8').val(),$('#fsoft-i-9').val(),$('#fsoft-i-10').val(),$('#fsoft-i-11').val(),]
	$.ajax({
				url: './conf/save_edit_fsoft.php',
				type: 'POST',
				data:{0:value[0],1:value[1],2:value[2],3:value[3],4:value[4],5:value[5],6:value[6],7:value[7],8:value[8],9:value[9],10:value[10],11:NSI},
			})
			.done(function(data) {
				LOADdataFSOFT();
				fsClose();
			});
}
$(document).on('click','.transaksi',function(){
	// var idx = $(this).closest('tr').attr('idx');
	// alert();c
	// $('[name="id"]').val(idx);
	$('[name="jml_bayar"]').val(0);
	$('.transaksi-row').remove();
	$('.save').show();
	tambahTransaksi();
});
$(document).on('click','.lihat',function(){
	$('.save').hide();
	var idx = $(this).closest('tr').attr('idx');

	$('[name="jml_bayar"]').val(0);
	$('.transaksi-row').remove();
	$.post( base_url+"admin/transaksi/get_transaksi", {idx: idx}).done(function( data1 ) {
		// var json = $.parseJSON(data1.detail);
		var json = $.parseJSON(data1);
		for (var i = 0; i < json.bayu.length; i++) {
			$('#tabel-transaksi').append(
			'<tr class="transaksi-row"><td><input type="obat" class="form-control" disabled name="obat[]" value="'+json.bayu[i].obat+'"></td>'+
			'<td><input type="number" class="form-control" disabled name="harga[]" value="'+json.bayu[i].harga_obat+'"></td>'+
			'<td><input type="text" class="form-control" name="jumlah[]" required value="'+json.bayu[i].total+'"><input type="hidden" class="form-control" value="0" name="id_transaksi[]"></td>'+
			'<td><input type="text" class="form-control" name="subTotal[]" value="'+json.bayu[i].jumlah_bayar+'" disabled required></td><td>'+
			// '<a class="btn btn-sm btn-white text-black" onclick="tambahTransaksi();"><i class="fa fa-plus-square-o fa-lg"></i></a>'+ 
			// '<a class="btn btn-sm btn-white text-black" onclick="hapusTransaksi(this);"><i class="fa fa-minus-square-o fa-lg"></i></a>'+ 
			'</td></tr>'
			);
			
		}
		console.log(json.sugara);
		$('[name="tanggal"]').val(json.sugara.tgl_transaksi);
		$('[name="kd_transaksi"]').val(json.sugara.id);
		$('[name="pembeli"]').val(json.sugara.pembeli);

		$('[name="pegawai"]').val(json.sugara.id_pegawai);
		$('[name="total_item"]').val(json.sugara.jml_obat);
		$('[name="jml_bayar"]').val(json.sugara.jumlah);
		$('[name="pengirim"]').val(json.sugara.pengirim);
	})

});
$(document).on('change','[name="obat[]"]',function(){
	// var idx = $(this).closest('tr').attr('idx');
	var id = $(this).val();
	var n = $('[name="obat[]"]').index(this);
	if(id){
		$.post( base_url+"admin/transaksi/get_obat_details", {id: id}).done(function( data ) {
			var json = $.parseJSON(data);
			// console.log(json)
			$('[name="harga[]"]').eq(n).val(json.harga);
			// $('[name="address"]').val(json.address);
		});
	}
	// alert();
	// $('[name="id"]').val(idx);
	// tambahTransaksi();

});
$(document).on('change','[name="jumlah[]"]',function(){
	// var idx = $(this).closest('tr').attr('idx');
	var val = $(this).val(),
    	len = $('[name="jumlah[]"]').length,
		n = $('[name="jumlah[]"]').index(this),
		harga = $('[name="harga[]"]').eq(n).val(),
		total = Number(harga) * Number(val),
		jml = 0;
	 $('[name="subTotal[]"]').eq(n).val(total);
	 for (var i = 0; i < len; i++) {
	 	jml = Number(jml) + Number($('[name="subTotal[]"]').eq(i).val());
	 }
	 $('[name="jml_bayar"]').val(jml);
	 console.log(len);
});
$(document).ready(function() {
	get_obat();
});
function tambahTransaksi(){
	// $(".select2").select2();
	var obat = localStorage.getItem('obat_data');
	$('#tabel-transaksi').append(
		'<tr class="transaksi-row"><td><select class="select2 form-control" style="width:100%" name="obat[]"><option value="">select obat</option>'+obat+'</select></td>'+
		'<td><input type="number" class="form-control" disabled name="harga[]"></td>'+
		'<td><input type="text" class="form-control" name="jumlah[]" required><input type="hidden" class="form-control" value="0" name="id_transaksi[]"></td>'+
		'<td><input type="text" class="form-control" name="subTotal[]" disabled required></td><td>'+
		'<a class="btn btn-sm btn-white text-black" onclick="tambahTransaksi();"><i class="fa fa-plus-square-o fa-lg"></i></a>'+ 
		'<a class="btn btn-sm btn-white text-black" onclick="hapusTransaksi(this);"><i class="fa fa-minus-square-o fa-lg"></i></a>'+ 
		'</td></tr>'
	);
	$(".select2").select2({
	  placeholder: "Select obat"
	});
	var len = $('[name="obat[]"]').length;
	$('[name="total_item"]').val(len);
}
function hapusTransaksi(el){
	var idx = $(el).closest('tr').find('[name="id_transaksi[]"]').val();
	var kode = $(el).closest('tr').find('[name="obat[]"]').val();
	if(idx == 0){
		$(el).parent().parent().remove();
	}else{
		bootbox.confirm("Apakan anda yakin akan menghapus transaksi "+kode+"?", function(result){
			if (result) {
				$.post( base_url+"admin/provider/delete_transaksi", {id : idx}).done(function( data ) {
					if (data == '1'){
						bootbox.alert("Data berhasil dihapus.", function(){
							$(el).parent().parent().remove();
						})
					} else {
						bootbox.alert('Data gagal dihapus.');
					}
				});
			}else{
			}
		});
	}
}
function get_obat(){
	var list="";
 	$.ajax({ type:'POST',url:base_url+"admin/transaksi/get_obat"}).done(function( data ) {
		var json = $.parseJSON(data);
			// json = response.student_list;
		// var ipkRange = "IPK Range "+response.total_sow['min_ipk']+" - "+response.total_sow['max_ipk'];
		// $('label[for=working_hour_in]').text(ipkRange);
		// var list="";
		// console.log(json);
		for (var i = 0; i < json.length; i++) {
			// console.log(json[i].id);
			list = list + '<option value="'+json[i].id_obat+'">'+json[i].nama+' - '+json[i].stok+'</option>';
		}
		localStorage.setItem('obat_data', list);

		// initStudentList();
	});
}
function post_transaksi(){
	$('input').removeAttr('disabled');
	var data = $('#transaksiForm').serialize();
	var api = base_url+"admin/transaksi/post";
	    
    $.post(api, data).done(function( data ) {
      if (data == "1"){
        bootbox.alert("Data transaksi berhasil disimpan.", function(){
          location.reload();
        })
      }else{
        bootbox.alert("Gagal menyimpan data.");
      }   
    });
    console.log(base_url);
 }
 function post_transaksi_pembelian(){
	$('input').removeAttr('disabled');
	var data = $('#transaksiForm').serialize();
	var api = base_url+"admin/transaksi/post_beli";
	    
    $.post(api, data).done(function( data ) {
      if (data == "1"){
        bootbox.alert("Data transaksi berhasil disimpan.", function(){
          location.reload();
        })
      }else{
        bootbox.alert("Gagal menyimpan data.");
      }   
    });
    console.log(base_url);
 }
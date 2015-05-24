$(document).ready(function(){
$("#otsi").keyup(function(){
        var otsing = document.getElementById('otsi').value;
        var tabel = document.getElementById('k_tabel');
        var veerud;

        for (var rea_nr = 0; rea_nr < tabel.rows.length; rea_nr++) {
          var rea_data = '';

          if (rea_nr === 0) {
            veerud = tabel.rows.item(rea_nr).cells.length;
            continue; 
          }

          for (var veeru_nr = 0; veeru_nr < veerud; veeru_nr++) {
            var data = '';

            if (navigator.appName == 'Microsoft Internet Explorer'){
              data = tabel.rows.item(rea_nr).cells.item(veeru_nr).innerText;
            }
            else{
              data = tabel.rows.item(rea_nr).cells.item(veeru_nr).textContent;
            }
            rea_data += data;
          }

          rea_data = rea_data.toLowerCase();
          otsing = otsing.toLowerCase();

          if (rea_data.indexOf(otsing) == -1){
            tabel.rows.item(rea_nr).style.display = 'none';
        }
          else{
            tabel.rows.item(rea_nr).style.display = 'table-row';
        }
        }
      });
});

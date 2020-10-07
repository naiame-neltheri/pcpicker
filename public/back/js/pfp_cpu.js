var all_cpu_recommendation_data;

$(document).ready(function() {

    // ###################################################
    // All about CPU
    // ###################################################
    $('#table_cpu').DataTable( {
        dom: 'Bfrtip',
        bInfo : false,
        pageLength: 2,
        buttons: {
            buttons: [
                {
                    text: 'Create',
                    className: 'btn-info',
                    init: function(api, node, config) {
                       $(node).removeClass('btn-secondary');
                    },
                    action: function ( e, dt, node, config ) {
                        $('#createCPUModal').modal('show');
                    }
                }
            ]
        }
    });

    // All recommendation cpu data
    var table_recc_cpu = $('#table_recc_cpu').DataTable( {
        bInfo : false,
        bLengthChange: false,
        bFilter: true,
        bInfo: false,
        pageLength: 15,
        bAutoWidth: false,
        dom: "fltpi",
        sSearch: "Search by name ...",
        ajax         : {
            "type"   : "GET",
            "url"    : "/g-rec-cpu",
            "dataSrc": function (json) {

                all_cpu_recommendation_data = new Array();
                for(var i=0;i< json.length; i++) {
                    all_cpu_recommendation_data.push({
                        'name': json[i].name,
                        'courcount': json[i].courcount,
                        'coreclock': json[i].coreclock,
                        'boostclock': json[i].boostclock,
                        'smt': json[i].smt,
                        'tdp': json[i].tdp,
                        'integrated_graphics': json[i].integrated_graphics,
                        'fill': '<button type="button" class="btn btn-success recc_sync_button" onclick="fill_recc_data('+i+')"><i class="fas fa-arrow-right"></i></button>'
                    })
              }
              return all_cpu_recommendation_data;
            }
        },
        'columns': [
           { data: 'name' }, 
           { data: 'courcount' },
           { data: 'coreclock' },
           { data: 'boostclock' },
           { data: 'tdp' },
           { data: 'integrated_graphics' },
           { data: 'fill' },
        ]
    });
    $('#custom_search_recc_cpu').keyup(function() {table_recc_cpu.search($(this).val()).draw();});

    // Image Upload
    document.getElementById('cpu-image').addEventListener('change', readCPUImage, false);
    $( ".preview-images-zone" ).sortable();
    $(document).on('click', '.image-cancel', function() {
        let no = $(this).data('no');
        $(".preview-image.preview-show-"+no).remove();
    });
});

// ###################################################
// All about CPU
// ###################################################
function fill_recc_data(id) {
    $("#_cpu_name").val( all_cpu_recommendation_data[id].name );
    $("#_cpu_corecount").val( all_cpu_recommendation_data[id].courcount );
    $("#_cpu_coreclock").val( all_cpu_recommendation_data[id].coreclock );
    $("#_cpu_boostclock").val( all_cpu_recommendation_data[id].boostclock );
    $("#_cpu_tdp").val( all_cpu_recommendation_data[id].tdp );
    if( all_cpu_recommendation_data[id].tdp.toLowerCase() == "yes" ) { $("#_cpu_smt").val(1); }
    else{ $("#_cpu_smt").val(0); }
    $("#_cpu_intg_grp").val( all_cpu_recommendation_data[id].integrated_graphics );
}

function saveProduct_CPU() {
    console.log("Save");
    // _cpu_smt
    // _cpu_used
    // _cpu_price
    // _cpu_desc
}




var num = 4;
function readCPUImage() {
    if (window.File && window.FileList && window.FileReader) {
        var files = event.target.files; //FileList object
        var output = $(".preview-images-zone");

        for (let i = 0; i < files.length; i++) {
            var file = files[i];
            if (!file.type.match('image')) continue;
            
            var picReader = new FileReader();
            
            picReader.addEventListener('load', function (event) {
                var picFile = event.target;
                var html =  '<div class="preview-image preview-show-' + num + '">' +
                            '<div class="image-cancel" data-no="' + num + '">x</div>' +
                            '<div class="image-zone"><img id="cpu-img-' + num + '" src="' + picFile.result + '"></div>' +
                            '</div>';

                output.append(html);
                num = num + 1;
            });

            picReader.readAsDataURL(file);
        }
        $("#cpu-image").val('');
    } else {
        alert('Browser not support');
    }
}
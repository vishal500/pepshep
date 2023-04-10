
$("#client_create").parsley();
$("#client_create").on("submit", function (event) {
    event.preventDefault();
    var formData = new FormData(this);
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });

    if ($("#client_create").parsley().isValid()) {
        $.ajax({
            url: AdminbaseURL + "/client/store",
            method: "POST",
            data: formData,
            dataType: "json",
            processData: false,
            contentType: false,
            beforeSend: function () {
                $(".admin_loader").show();
            },
            success: function (data) {
                $(".admin_loader").hide();

                if (data.status == true) {
                    swal({
                        text: data.message,
                        icon: "success",
                    }).then(function (isConfirm) {
                        if (isConfirm) {
                            $(location).attr(
                                "href",
                                AdminbaseURL + "/client/list/"
                            );
                        } 
                    });
                } else {
                    swal({
                        text: data.message,
                        icon: "info",
                    })
                }

            },
        });
    }
});



const service_provider_list = (url) => {
    $("#my_table").DataTable({
        processing: true,
        serverSide: true,
        ajax: url,

        columns: [{
                "data": 'DT_RowIndex',
                orderable: false,
                searchable: false
            }, {
                data: 'company_name',
                name: 'company_name',
                searchable: true
            }, {
                data: 'type',
                name: 'type',
                searchable: true
            }, {
                data: 'address_1',
                name: 'address_1',
                searchable: true
            }, {
                data: 'contact_number',
                name: 'contact_number',
                searchable: true
            }, {
                data: 'contact_name',
                name: 'contact_name',
                searchable: true
            }, {
                data: 'billing_email_id',
                name: 'billing_email_id',
                searchable: true
            }, {
                data: 'status',
                name: 'status',
                searchable: true
            }, {
                data: 'updated_at',
                name: 'updated_at',
                searchable: true
            }, {
                "mRender": function(data, type, row) {
                    return `<a href="${row.route_show}" class="btn btn-primary  btn-sm"><i class="fa fa-edit" aria-hidden="true"></i></a>
                `;
                },
                searchable: false
            }


        ],

    });
}


$("#client_update").parsley();
$("#client_update").on("submit", function (event) {
    event.preventDefault();
    var formData = new FormData(this);
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });

    if ($("#client_update").parsley().isValid()) {
        $.ajax({
            url: AdminbaseURL + "/client/update",
            method: "POST",
            data: formData,
            dataType: "json",
            processData: false,
            contentType: false,
            beforeSend: function () {
                $(".admin_loader").show();
            },
            success: function (data) {
                $(".admin_loader").hide();

                if (data.status == true) {
                    swal({
                        text: data.message,
                        icon: "success",
                    }).then(function (isConfirm) {
                        if (isConfirm) {
                            $(location).attr(
                                "href",
                                AdminbaseURL + "/client/list/"
                            );
                        } 
                    });
                } else {
                    swal({
                        text: data.message,
                        icon: "info",
                    })
                }


            },
        });
    }
});

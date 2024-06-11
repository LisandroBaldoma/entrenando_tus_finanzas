@extends('panel.layouts.base')

@section('pre-css')
    <link rel="stylesheet" href="{{ asset('assets/panel/libs/jstree-bootstrap/dist/themes/proton/style.min.css') }}">
    <link href="{{ asset('assets/panel/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('assets/panel/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('assets/panel/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}"
        rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/panel/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/panel/libs/toastr/build/toastr.min.css') }}" rel="stylesheet" type="text/css" />
    {{-- <link href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" /> --}}
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">{{ __('base.PRODUCTOS') }}</h4>
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{ route('Home.GET_index') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">{{ __('base.PRODUCTOS') }}</li>
                    </ol>
                </div>
            </div>
        </div>

        @inject('_productController', 'App\Http\Controllers\Panel\ProductController')
        <div class="d-flex bd-highlight mb-3">

            <div class="pt-2 bd-highlight " style="width: 250px;">
                <input type="text" id="buscar" class="form-control" placeholder="{{ __('base.BUSCAR') }}...">
            </div>

            <div class="pt-2 ps-2 bd-highlight">
                <div class="select2-control-clear" style="width: 70px;">
                    <select class="form-control control-clear" id="pageLenght">
                        <option value="10">10</option>
                        <option value="25">25</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                    </select>
                </div>
            </div>

            <div class="pt-2 bd-highlight ms-2" style="width: 200px;">
                {!! $_productController->getCategoriesHtml() !!}
            </div>
            <div class="pt-2 bd-highlight ms-2" style="width: 200px;">
                {!! $_productController->getAttributesHtml() !!}
            </div>
            <div class="pt-2 bd-highlight ms-2" style="width: 200px;">
                {!! $_productController->getTagsHtml() !!}
            </div>
            {{-- <div class="pt-2 bd-highlight ms-2" style="width: 200px;">
                {!! $_productController->getGroupsHtml() !!}
            </div> --}}
        </div>

        @if (Session::get('ok'))
            <div class="col-12">
                <div class="alert alert-{{ Session::get('resultado') }} alert-dismissible fade show" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </button>
                    {{ Session::get('ok') }}
                </div>
            </div>
        @endif
    </div>
    <div id="myModalTree" class=" modal fade" tabindex="-1" style="display: none;" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="myModalLabel">{{ __('base.CATEGORIA') }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="card-body">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-body sm-50px">
                                        </h4>
                                        <br>
                                        <form action="{{ URL::route('Product.POST_create') }}" method="POST">
                                            <input type="hidden" name="id_prod" id="id_prod">
                                            <input type="hidden" id="actions" name="accion" value="row">
                                            <input type="hidden" id="type" name="type" value="asign">
                                            <input type="hidden" name="id_cat" id="id_cat">
                                            <p>{{ __('base.TXT_ARBOL') }}</p>
                                            <div id="tree_1" class="tree-demo">
                                            </div>
                                            <br>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button id="modalAsignar" type="submit"
                        class="btn btn-primary waves-effect waves-light">{{ __('base.ASIGNAR') }}</button>
                </div>
                </form>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>
    <div id="myModalAttribute" class=" modal fade" tabindex="-1" style="display: none;" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="myModalLabel">{{ __('base.ATRIBUTOS') }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <form action="{{ URL::route('Product.POST_create') }}" method="POST" id="form-modal">
                                <input type="hidden" id="accion" name="accion" value="attributevalues">
                                <br>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button id="modalAsignar" type="submit"
                        class="btn btn-primary waves-effect waves-light">{{ __('base.ASIGNAR') }}</button>
                </div>
                </form>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>
    <div id="myModalTag" class=" modal fade" tabindex="-1" style="display: none;" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{ URL::route('Product.POST_create_tag') }}" method="POST" id="form-modal">
                    <div class="modal-header bg-success">
                        <h5 class="modal-title mt-0" id="myModalLabel">{{ __('base.TAG') }}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="card-body">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-body sm-50px">

                                            <input type="hidden" id="acciontag" name="acciontag" value="individual">
                                            <input type="hidden" id="idprod" name="idprod">
                                            <div id="divtag"></div>
                                            <br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button id="modalAsignar" type="submit"
                            class="btn btn-success waves-effect waves-light">{{ __('base.ASIGNAR') }}</button>
                    </div>
                </form>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>
    {{-- <div id="myModalAssignGroup" class="modal fade" tabindex="-1" style="display: none;" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="myModalLabel">{{ __('base.GRUPO_PRODUCTOS') }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <form action="{{ URL::route('Product.POST_create') }}" method="POST" id="form-modal-group">
                                <input type="hidden" id="accion" name="accion" value="productsgroupvalues" />
                                <br>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button id="modalAsignar" type="submit"class="btn btn-primary waves-effect waves-light">{{ __('base.ASIGNAR') }}</button>
                </div>
                </form>
            </div>
        </div>
    </div> --}}
    <div class="row">

        <div class="col-12">
            <div class="card">
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-bordered main-datatable mb-0" id="datatable">
                            <thead>
                                <th><input class="select-all as-checkbox"></th>
                                <th>{{ __('base.CODIGO') }}</th>
                                <th style="width: 35%">{{ __('base.VER_DETALLES') }}</th>
                                <th>{{ __('base.TAG') }}</th>
                                <th>{{ __('base.CATEGORIA') }}</th>
                                {{-- <th>{{ __('base.VISIBLE') }} App</th>
                                <th>Stock App</th> --}}
                                {{-- <th>{{ __('base.GRUPO') }}</th> --}}
                                <th>{{ __('base.ACCIONES') }}</th>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="portlet box">
                <div class="portlet-body">
                    <h3 style="margin-top:0px;">{{ __('base.TXT_PUBLICACIONES') }}</h3>
                    <table class="table table-hover table-striped">
                        <thead>
                            <th>{{ __('base.CODIGO') }}</th>
                            <th>{{ __('base.NOMBRE') }}</th>
                            <th></th>
                        </thead>
                        <tbody id="productos-seleccionados-tbody">
                        </tbody>
                    </table>
                    <form action="{{ URL::route('Product.POST_create') }}" method="POST">
                        <select id="acciones-productos" name="ac" class="form-select"
                            style="width: 300px;display: inline-block;height: 37px;vertical-align: bottom;">
                            <option value="none">{{ __('base.SELECCIONAR') }}</option>
                            <option value="3">Tag</option>
                            {{-- <option value="4">No {{ __('base.VISIBLE') }}</option>
                            <option value="5">{{ __('base.VISIBLE') }}</option>
                            <option value="6">{{ __('base.SIN_STOCK') }}</option>
                            <option value="7">{{ __('base.CON_STOCK') }}</option> --}}
                            {{-- <option value="8">{{ __('base.ASIGNAR_GRUPO_PRODUCTOS') }}</option> --}}
                        </select>
                        <input type="number" placeholder="0%" name="cobertura-envio-input" class="form-control"
                            style="display: none;width: 65px;">
                        <input type="number" placeholder="0" name="modificar-maximo-input" class="form-control"
                            style="display: none;width: 65px;">
                        <input type="hidden" name="idproductos" id="idproductos">
                        <input type="hidden" name="accion" value="allrow">
                        <button class="btn btn-primary" type="submit" id="aplicar"
                            style="height: 37px;">{{ __('base.APLICAR') }}</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="portlet box">
                <div class="portlet-body">
                    <h3 style="margin-top:0px;">{{ __('base.ACCIONES') }} {{ __('base.MASIVAS') }}</h3>
                    <h5 style="margin-bottom: 20px;line-height:23px;">{{ __('base.TXT_ACCIONES') }}</h5><br>
                    <form action="" method="GET">
                        <select name="acc" id="accselectall" class="form-select"
                            style="width: 300px;display: inline-block;height: 37px;vertical-align: bottom;">
                            <option value="none">{{ __('base.SELECCIONAR') }}</option>
                            </option>
                            <option value="asigntag">Tag</option>
                            {{-- <option value="novisible">No {{ __('base.VISIBLE') }}</option>
                            <option value="sivisible">{{ __('base.VISIBLE') }}</option>
                            <option value="sinstock">{{ __('base.SIN_STOCK') }}</option>
                            <option value="constock">{{ __('base.CON_STOCK') }}</option> --}}
                            {{-- <option value="asigrupoprod">{{ __('base.ASIGNAR_GRUPO_PRODUCTOS') }}</option> --}}
                        </select>
                        <input type="number" placeholder="0%" name="cobertura-envio-input" class="form-control"
                            style="display: none;width: 65px;">
                        <a class="btn btn-primary" id="aplicarall" style="height: 37px;">{{ __('base.APLICAR') }}</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('assets/panel/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/panel/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/panel/libs/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/panel/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/panel/libs/jstree/dist/jstree.min.js') }}"></script>
    <script src="{{ asset('assets/panel/libs/sweetalert2/sweetalert2.min.js') }}"></script>
    <script src="{{ asset('assets/panel/libs/toastr/build/toastr.min.js') }}"></script>
    <script src="{{ asset('assets/panel/libs/datatables.net/js/ColReorderWithResize.js') }}"></script>

    <script>
        $(document).ready(function() {

           

            ////// END TREE  ////
            var productos_seleccionados = {};

            ////// DATATABLE /////
            var categoryNull = false;
            var selectedAttribute;
            var selectedTag;
            var selectedCategory;
            var selectedGroup;

            var dataTable = $("#datatable").DataTable({
                processing: true,
                serverSide: true,
                searching: true,
                ajax: {
                    url: "{{ route('Product.GET_datatable') }}",
                    "data": function(d) {
                        d.category_is_null = categoryNull;

                        if (selectedAttribute != null && selectedAttribute != '') {
                            d.attributes = [selectedAttribute];
                        }

                        if (selectedTag != null && selectedTag != '') {
                            d.tags = [selectedTag];
                        }

                        if (selectedCategory != null && selectedCategory != '') {
                            d.category = [selectedCategory];
                        }

                        // if (selectedGroup != null && selectedGroup != '') {
                        //     d.group = [selectedGroup];
                        // }
                    },
                },
                lengthChange: true,
                info: false,
                paging: true,
                'dom': 'Brtp',
                colReorder: true,
                colReorder: {
                    'allowReorder': false
                },
                language: {
                    paginate: {
                        first: "{{ __('base.PRIMERO') }}",
                        last: "{{ __('base.ULTIMO') }}",
                        next: "{{ __('base.SIGUIENTE') }}",
                        previous: "{{ __('base.ANTERIOR') }}"
                    },
                },
                columns: [{
                        name: 'stock0.codigo',
                        data: 'codigo',
                        sortable: false,
                        render: function(data, type, row) {
                            return `<input type="checkbox" name="productos_checkbox[]" value="${data}">`;
                        }
                    },
                    {
                        name: 'stock0.codigo',
                        data: 'codigo',
                    },
                    {
                        name: 'stock0.descripcion',
                        data: 'detalle'
                    },
                    {
                        name: 'w_tags.name',
                        data: 'name_tag'
                    },
                    {
                        name: 'w_categorias.name',
                        data: 'name_categoria',
                        bsearchable: true
                    },
                    // {
                    //     name: 'w_product_extension.no_visible',
                    //     data: 'no_visible',
                    //     render: function(data, type, row) {
                    //         if (data == 1) {
                    //             return '<a class="btn-sm btn-danger">No</a>';
                    //         }

                    //         return '';
                    //     }
                    // },
                    // {
                    //     name: 'w_product_extension.no_stock',
                    //     data: 'no_stock',
                    //     render: function(data, type, row) {
                    //         if (data == 1) {
                    //             return '<a class="btn-sm btn-danger">No</a>';
                    //         }

                    //         return '';
                    //     }
                    // },
                    // {
                    //     name: 'w_products_groups.product_group_id',
                    //     data: 'product_group'
                    // },
                    {
                        name: 'codigo',
                        data: 'codigo',
                        orderable: false,
                        render: function(data, type, meta) {
                            var html2 =
                                `  <a data-id='${data}'data-toggle="tooltip" data-placement="top" title="{{ __('base.ASIGNAR') }} Tag" class='btn-sm btn-success bx bx-purchase-tag-alt obtenertag'data-bs-toggle='modal' data-bs-target='#myModalTag'></a>
                                  `;

                            return html2;
                        }
                        /*
                         <a data-id='${data}'data-toggle="tooltip" data-placement="top" title="No {{ __('base.VISIBLE') }}/{{ __('base.VISIBLE') }}" class='btn-sm btn-warning bx bx-hide visibilizar'data-bs-toggle='modal' data-bs-target=''></a>
                                   <a data-id='${data}'data-toggle="tooltip" data-placement="top" title="NO Stock/SI Stock" class='btn-sm btn-danger bx bxs-no-entry stockear'data-bs-toggle='modal' data-bs-target=''></a>
                        */
                    }
                ],
                drawCallback: function(settings) {
                    $('.as-checkbox').prop('checked', false);
                    refrescarCheckboxes();
                }
            });

            //dataTable.columns([7,8,9,10]).visible(false);

            // Buscador
            $('#buscar').on('change', function() {
                dataTable.search($(this).val(), false, true).draw();
            });

            // Paginacion datatable
            $("#pageLenght").on("change", function() {
                dataTable.page.len(this.value).draw();
            });


            ////// SEARCH FILTER /////
            var tableCategory = 'name_categoria';

            $('#categorySearch').on('change', function() {
                selectedCategory = $(this).val();
                localStorage.setItem('categoryValue', selectedCategory);
                dataTable.ajax.reload();

            });

            $('#attributeFilter').on('change', function() {
                selectedAttribute = $(this).val();
                localStorage.setItem('atributteValue', selectedAttribute);
                dataTable.ajax.reload();
            });

            $('#tagsFilter').on('change', function() {
                selectedTag = $(this).val();
                localStorage.setItem('tagsValue', selectedTag);
                dataTable.ajax.reload();
            });

            // $('#groupFilter').on('change', function() {
            //     selectedGroup = $(this).val();
            //     localStorage.setItem('groupValue', selectedGroup);
            //     dataTable.ajax.reload();
            // });

            $('#rubroSearch').on('change', function() {
                dataTable.column('rubro:name').search($(this).val(), false, true).draw();
                localStorage.setItem('rubroValue', $(this).val());
            });

            $('#subrubroSearch').on('change', function() {
                dataTable.column('subrubro:name').search($(this).val(), false, true).draw();
                localStorage.setItem('subrubroValue', $(this).val());
            });

            if (localStorage.getItem("atributteValue") != null) {
                $("#attributeFilter").val(localStorage.getItem("atributteValue"));
                selectedAttribute = localStorage.getItem("atributteValue");
                dataTable.ajax.reload();
            }

            if (localStorage.getItem("subrubroValue") != null) {
                $("#subrubroSearch").val(localStorage.getItem('subrubroValue'));
                dataTable.column('subrubro:name').search(localStorage.getItem('subrubroValue'), false, true).draw();
            }

            if (localStorage.getItem("rubroValue") != null) {
                $("#rubroSearch").val(localStorage.getItem('rubroValue'));
                dataTable.column('rubro:name').search(localStorage.getItem('rubroValue'), false, true).draw();
            }


            //// CHECKBOXES EVENTS ///////
            $.each($('.as-checkbox'), function() {
                $(this).attr('type', 'checkbox');
            });

            $('.select-all').on('input', function() {
                var val = this.checked;


                $('[name="productos_checkbox[]"]').each(function() {
                    $(this).prop('checked', val);

                    seleccionarProducto(this);
                });
                refrescar_productos_seleccionados();
            });

            $(document).on("change", '[name="productos_checkbox[]"]', function() {
                $('.select-all').prop('checked', false);
                seleccionarProducto(this);
                refrescar_productos_seleccionados();
            });


            $(document).on("click", '.remove-producto-seleccionado', function() {
                var tr = $(this).closest('tr');
                var id = $(tr).attr('data-id');

                delete productos_seleccionados[id];

                refrescar_productos_seleccionados();
                refrescarCheckboxes();
            });

            $(document).on('click', '.nc-cerrar', function() {
                var el = $('.nc-content');
                var display = $(el).css('display');

                if (display == 'none') {
                    $(el).show(100);
                    $(this).find('i').attr('class', 'fa fa-chevron-down');
                } else {
                    $(el).hide(100);
                    $(this).find('i').attr('class', 'fa fa-chevron-up');
                }
            });

            //// CHECKBOXES FUNCTIONS ///////
            function seleccionarProducto(el) {
                if (el.checked) {
                    var rowData = row = dataTable.row($(el).parent().parent()).data();

                    productos_seleccionados[$(el).val()] = rowData;
                } else {
                    delete productos_seleccionados[$(el).val()];
                }
            }

            function refrescarCheckboxes() {
                $("#datatable").find('[name="productos_checkbox[]"]').each(function() {
                    $(this).prop('checked', this.value in productos_seleccionados);
                });


            }

            function refrescar_productos_seleccionados() {
                $('#productos_seleccionados').val(JSON.stringify(productos_seleccionados));
                $('#productos-seleccionados-tbody').empty();

                $.each(productos_seleccionados, function() {
                    var acciones =
                        '<span class="remove-producto-seleccionado" style="color:red;cursor:pointer;">X</span>';
                    var tr = '<tr data-id="' + this.codigo + '"><td>' + this.codigo + '</td><td>' + this
                        .detalle + '</td><td>' + acciones + '</td></tr>';

                    $('#productos-seleccionados-tbody').append(tr);
                });
            }
            /////// TREE FUNCTIONS ////////

            $('#tree_1').on('select_node.jstree deselect_node.jstree', function(e, data) {

                let dat = data.instance._model.data;

                if ($('#id_cat').val() == data.node.id) {
                    $('#id_cat').val('');
                } else {
                    $('#id_cat').val(data.node.id);
                }
            });

            $(this).on('click', '#modalAsignar', function(e) {

                var nod = $("#id_cat").val();
                $parc = nod;
                $ids = $parc.split(",");
                var sumchild = 0;
                var lstorage = localStorage.getItem("dating");
                var jsencode = JSON.parse(lstorage);
                jQuery.each(jsencode, function(i, val) {
                    $ids.forEach(element => {
                        if (element == val.id) {
                            sumchild += (val.children).length;
                        }
                    });
                });
                if (sumchild > 0) {
                    e.preventDefault();
                    Swal.fire({
                        title: "@lang('base.DEBE_SELECIONAR_PRODUCTO')",
                        icon: 'warning',
                    });
                };
            });

            /////// EVENTS DATATABLE ///////
            $(document).on('click', '.idasign', function() {
                $("#tree_1").jstree().deselect_all(true);
                $('#tree_1').jstree('select_node', $(this).attr('idedit'));
                var idasign = $(this).data('idval');
                $('#id_prod').val(idasign);
            });

            $(document).on('click', '#aplicar', function(e) { // SELECT CHECK
                var cod_prod_select = [];
                $.each(productos_seleccionados, function() {
                    cod_prod_select.push(this.codigo);
                });
                var prod = JSON.stringify(cod_prod_select);
                var val = $("#acciones-productos").val();
                $("#idproductos").val(prod);
                if (val == "1") {
                    e.preventDefault();
                    var res = $.isEmptyObject(productos_seleccionados);
                    if (res == false) {
                        console.log(res);
                        $("#id_prod").val(prod);
                        $("#actions").val("allrow");
                        $("#myModalTree").modal("show");
                    } else {
                        Swal.fire({
                            title: "@lang('base.DEBE_SELECIONAR_PRODUCTO')",
                            icon: 'warning',
                        });
                        return
                    }
                }
                if (val == "2") {
                    e.preventDefault();
                    var res = $.isEmptyObject(productos_seleccionados);
                    if (res == false) {
                        $("#form-modal").empty();
                        $.ajax({
                            type: "POST",
                            url: "{{ URL::route('Product.POST_edit') }}",
                            data: {
                                "ids": cod_prod_select,
                                "accion": "checkall"
                            },
                            success: function(data) {
                                $("#form-modal").append(data);
                                $("#id_producto").val(prod);
                                $("#accion").val("attrvalselect");
                            },

                        });
                        $("#myModalAttribute").modal("show");

                    } else {
                        Swal.fire({
                            title: "@lang('base.DEBE_SELECIONAR_PRODUCTO')",
                            icon: 'warning',
                        });
                        return
                    }
                }
                if (val == "3") {
                    e.preventDefault();
                    var res = $.isEmptyObject(productos_seleccionados);
                    if (res == false) {
                        console.log(prod);
                        $.ajax({
                            type: "POST",
                            url: "{{ URL::route('Product.POST_tagstatus') }}",
                            data: {
                                "id": "0",
                                "accion": "tag"
                            },
                            success: function(data) {
                                $("#divtag").html(data);
                                $("#idprod").val(prod);
                                $("#acciontag").val("check")
                            },

                        });
                        $("#myModalTag").modal("show");

                    } else {
                        Swal.fire({
                            title: "@lang('base.DEBE_SELECIONAR_PRODUCTO')",
                            icon: 'warning',
                        });
                        return
                    }
                }
                if (val == "4") {
                    e.preventDefault();
                    var res = $.isEmptyObject(productos_seleccionados);
                    if (res == false) {
                        console.log(prod);
                        $.ajax({
                            type: "POST",
                            url: "{{ URL::route('Product.POST_no_visible') }}",
                            data: {
                                "idprod": prod,
                                "accion": "check",
                                "visibilidad": 1
                            },
                            success: function(data) {
                                dataTable.ajax.reload(null, false);
                                toastr["error"](
                                    "@lang('base.PRODUCTOS_NO_VISIBLES')",
                                );
                            },

                        });

                    } else {
                        Swal.fire({
                            title: "@lang('base.DEBE_SELECIONAR_PRODUCTO')",
                            icon: 'warning',
                        });
                        return
                    }
                }
                if (val == "5") {
                    e.preventDefault();
                    var res = $.isEmptyObject(productos_seleccionados);
                    if (res == false) {
                        console.log(prod);
                        $.ajax({
                            type: "POST",
                            url: "{{ URL::route('Product.POST_no_visible') }}",
                            data: {
                                "idprod": prod,
                                "accion": "check",
                                "visibilidad": 0
                            },
                            success: function(data) {
                                dataTable.ajax.reload(null, false);
                                toastr["success"](
                                    "@lang('base.PRODUCTOS_VISIBLES')",
                                );
                            },

                        });

                    } else {
                        Swal.fire({
                            title: "@lang('base.DEBE_SELECIONAR_PRODUCTO')",
                            icon: 'warning',
                        });
                        return
                    }
                }
                if (val == "6") {
                    e.preventDefault();
                    var res = $.isEmptyObject(productos_seleccionados);
                    if (res == false) {
                        console.log(prod);
                        $.ajax({
                            type: "POST",
                            url: "{{ URL::route('Product.POST_sin_stock') }}",
                            data: {
                                "idprod": prod,
                                "accion": "check",
                                "sinstock": 1
                            },
                            success: function(data) {
                                dataTable.ajax.reload(null, false);
                                toastr["error"](
                                    "{{ __('base.PRODUCTOS') }} {{ __('base.SIN_STOCK') }}"
                                );
                            },

                        });

                    } else {
                        Swal.fire({
                            title: "@lang('base.DEBE_SELECIONAR_PRODUCTO')",
                            icon: 'warning',
                        });
                        return
                    }
                }
                if (val == "7") {
                    e.preventDefault();
                    var res = $.isEmptyObject(productos_seleccionados);
                    if (res == false) {
                        console.log(prod);
                        $.ajax({
                            type: "POST",
                            url: "{{ URL::route('Product.POST_sin_stock') }}",
                            data: {
                                "idprod": prod,
                                "accion": "check",
                                "sinstock": 0
                            },
                            success: function(data) {
                                dataTable.ajax.reload(null, false);
                                toastr["success"](
                                    "{{ __('base.PRODUCTOS') }} {{ __('base.CON_STOCK') }}"
                                );
                            },

                        });

                    } else {
                        Swal.fire({
                            title: "@lang('base.DEBE_SELECIONAR_PRODUCTO')",
                            icon: 'warning',
                        });
                        return
                    }
                }
                // if (val == "8") {
                //     e.preventDefault();
                //     var res = $.isEmptyObject(productos_seleccionados);
                //     if (res == false) {
                //         $("#form-modal-group").empty();
                //         $.ajax({
                //             type: "POST",
                //             url: "{{ URL::route('Product.POST_product_group_edit') }}",
                //             data: {
                //                 "ids": cod_prod_select,
                //                 "accion": "check"
                //             },
                //             success: function(data) {
                //                 $("#form-modal-group").append(data.html);
                //                 $("#id_producto").val(prod);
                //                 $("#form-modal-group input[name=accion]").val('productgroupselect');
                //             },
                //         });

                //         $("#myModalAssignGroup").modal("show");
                //     } else {
                //         Swal.fire({
                //             title: "@lang('base.DEBE_SELECIONAR_PRODUCTO')",
                //             icon: 'warning',
                //         });

                //         return;
                //     }
                // }
                if (val == "none") {
                    e.preventDefault();
                    Swal.fire({
                        title: "@lang('base.DEBE_SELECIONAR_ACCION')",
                        icon: 'warning',
                    });
                    return
                }
            });

            $(document).on('click', '#aplicarall', function(e) { // SELECT ALL
                var val = $("#accselectall").val();
                if (val == "asignarcat") {
                    e.preventDefault();
                    $("#actions").val("masiva");
                    $("#myModalTree").modal("show");
                }
                if (val == "asignaratrval") {
                    $("#form-modal").empty();
                    $.ajax({
                        type: "POST",
                        url: "{{ URL::route('Product.POST_edit') }}",
                        data: {
                            "accion": "checkall",
                            "ubi": "global"
                        },
                        success: function(data) {
                            $("#form-modal").append(data);
                            $("#ubi").val("valueglobal");
                            $("#accion").val("attrvalselect");
                        },

                    });
                    $("#myModalAttribute").modal("show");


                }
                if (val == "asigntag") {
                    $("#myModalTag").modal("show");
                    $("#acciontag").val("valueglobal");
                    $.ajax({
                        type: "POST",
                        url: "{{ URL::route('Product.POST_tagstatus') }}",
                        data: {
                            "id": "0",
                            "accion": "tag"
                        },
                        success: function(data) {
                            $("#divtag").html(data);
                        },

                    });
                }
                if (val == "novisible") {
                    $.ajax({
                        type: "POST",
                        url: "{{ URL::route('Product.POST_no_visible') }}",
                        data: {
                            "id": "0",
                            "accion": "valueglobal",
                            "visibilidad": 1
                        },
                        success: function(data) {
                            dataTable.ajax.reload(null, false);
                            toastr["error"](
                                "@lang('base.PRODUCTOS_NO_VISIBLE')",
                            );
                        },

                    });
                }
                if (val == "sivisible") {
                    $.ajax({
                        type: "POST",
                        url: "{{ URL::route('Product.POST_no_visible') }}",
                        data: {
                            "id": "0",
                            "accion": "valueglobal",
                            "visibilidad": 0
                        },
                        success: function(data) {
                            dataTable.ajax.reload(null, false);
                            toastr["success"](
                                "@lang('base.PRODUCTOS_VISIBLES')",
                            );
                        },

                    });
                }
                if (val == "sinstock") {
                    $.ajax({
                        type: "POST",
                        url: "{{ URL::route('Product.POST_sin_stock') }}",
                        data: {
                            "id": "0",
                            "accion": "valueglobal",
                            "sinstock": 1
                        },
                        success: function(data) {
                            dataTable.ajax.reload(null, false);
                            toastr["error"](
                                "@lang('base.PRODUCTOS_SIN_STOCK')",
                            );
                        },

                    });
                }
                if (val == "constock") {
                    $.ajax({
                        type: "POST",
                        url: "{{ URL::route('Product.POST_sin_stock') }}",
                        data: {
                            "id": "0",
                            "accion": "valueglobal",
                            "sinstock": 0
                        },
                        success: function(data) {
                            dataTable.ajax.reload(null, false);
                            toastr["success"](
                                "@lang('base.PRODUCTOS_CON_STOCK')",
                            );
                        },

                    });
                }
                // if (val == "asigrupoprod") {
                //     e.preventDefault();
                //     $("#form-modal-group").empty();
                //     $.ajax({
                //         type: "POST",
                //         url: "{{ URL::route('Product.POST_product_group_edit') }}",
                //         data: {
                //             "id": "0",
                //             "accion": "checkall"
                //         },
                //         success: function(data) {
                //             $("#form-modal-group").append(data.html);
                //             $("#form-modal-group input[name=accion]").val('productgroupselectmasivo');
                //         },
                //     });

                //     $("#myModalAssignGroup").modal("show");
                // }
                if (val == "none") {
                    e.preventDefault();
                    Swal.fire({
                        title: "@lang('base.DEBE_SELECIONAR_ACCION')",
                        icon: 'warning',
                    });
                    return
                }
            });

            $(document).on('click', '.obteneratr', function(e) {
                $(':input[type="submit"]').prop('disabled', true);

                $("#form-modal").empty();
                var di = $(this).data("id");
                $.ajax({
                    type: "POST",
                    url: "{{ URL::route('Product.POST_edit') }}",
                    data: {
                        "id": di,
                        "accion": "check"
                    },
                    success: function(data) {
                        if(data["count"] == 0){
                           $(':input[type="submit"]').prop('disabled', true);
                        } else {
                           $(':input[type="submit"]').prop('disabled', false);
                        }

                        $("#form-modal").append(data["html"]);
                        $("#id_producto").val(di);
                    },

                });


            });

            $('#myModalAttribute').on('hidden.bs.modal', function () {
                $(':input[type="submit"]').prop('disabled', false);
            })

            // $('#myModalAssignGroup').on('hidden.bs.modal', function () {
            //     $(':input[type="submit"]').prop('disabled', false);
            // })

            $(document).on('click', '.obtenertag', function(e) {
                var id = $(this).data("id");
                var idprod = $("#idprod").val(id);
                $.ajax({
                    type: "POST",
                    url: "{{ URL::route('Product.POST_tagstatus') }}",
                    data: {
                        "id": id,
                        "accion": "tag"
                    },
                    success: function(data) {
                        $("#divtag").html(data);
                    },

                });


            });

            $(document).on('click', '.visibilizar', function(e) {
                var id = $(this).data("id");
                $.ajax({
                    type: "POST",
                    url: "{{ URL::route('Product.POST_no_visible') }}",
                    data: {
                        "idprod": id,
                        "accion": "individual",
                        "novisible": 0
                    },
                    success: function(data) {
                        dataTable.ajax.reload(null, false);
                        if (data == 1) {
                            toastr["error"](
                                "No {{ __('base.VISIBLE') }}"
                            );
                        } else {
                            toastr["success"](
                                "{{ __('base.VISIBLE') }}"
                            );
                        }
                    },
                });


            });

            $(document).on('click', '.stockear', function(e) {
                var id = $(this).data("id");
                $.ajax({
                    type: "POST",
                    url: "{{ URL::route('Product.POST_sin_stock') }}",
                    data: {
                        "idprod": id,
                        "accion": "individual",
                        "sinstock": 0
                    },
                    success: function(data) {
                        dataTable.ajax.reload(null, false);
                        if (data == 1) {
                            toastr["error"](
                                "{{ __('base.SIN_STOCK') }}"
                            );
                        } else if (data == 0) {
                            toastr["success"](
                                "{{ __('base.CON_STOCK') }}"
                            );
                        }
                    },

                });


            });
        });
    </script>
@endsection

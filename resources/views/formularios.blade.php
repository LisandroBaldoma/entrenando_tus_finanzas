<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Formularios') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Seccion de formularios!") }}
                </div>

                <table id="formularios" class="table table-striped nowrap" style="width:100%">
                    <thead>
                    <tr>
                        {{-- <th>ID</th> --}}
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Email</th>
                        <th>Celular</th>
                        <th>Mensaje</th>
                        <th>Tipo</th>
                        <th>Accion</th>

                    </tr>
                    </thead>
                    {{-- <tfoot>
                        <tr>
                            <th>ID</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Email</th>
                        <th>Celular</th>
                        <th>Mensaje</th>
                        <th>Tipo</th>
                        <th>Accion</th>
                        </tr>
                    </tfoot> --}}
                </table>


            </div>
        </div>
    </div>

</x-app-layout>





    <script>

        $(document).ready(function() {
             console.log('DATATABLE')

             dataTableForm =  $('#formularios').DataTable({
                processing: true,
                serverSide: true,


                ajax: {
                    url: '{{ route("dashboard.formularios") }}',


                },
                columns:[
                    // {
                    //     data: 'id',
                    //     name: 'id',
                    //     render: function(data, type, row) {
                    //         // return `<input type="checkbox" name="productos_checkbox[]" value="${data}">`;
                    //         console.log(row)
                    //         return data
                    //     }
                    // },
                    {
                        data: 'name',
                        name: 'name'
                    },
                    {
                        data: 'lastName',
                        name: 'lastName'
                    },
                    {
                        data: 'email',
                        name: 'email',
                        render: function(data, type, row) {
                            console.log(row)
                            if(data == null || data == ''){
                                return 'no registro email'
                            }else{
                                return data
                            }

                        }
                    },
                    {
                        data: 'celular',
                        name: 'celular'
                    },
                    {
                        data: 'mensaje',
                        name: 'mensaje',
                        render: function(data, type, row) {
                            console.log(row)
                            if(row.tipo !== 'contacto'){
                                return 'sin mensaje'
                            }else{
                                return data
                            }

                        }
                    },
                    {
                        data: 'tipo',
                        name: 'tipo'
                    },
                    {
                        data: 'tipo',
                        name: 'accion'
                    }

                ]

            });



        })





     </script>

{{--


public function GET_datatable()
    {
        $filtrados = 0;
        Log::info(json_encode(request()->all()));
        $query = Product::query()
            ->leftJoinCategory()
            // ->leftJoinStock()
            ->leftJoinExtension()
            ->leftJoinProductTag()
            ->leftJoinTag()
            ->leftJoinGroup()
            ->groupBy('stock0.codigo')
            ->where('stock0.codigo', '!=', '')
            ->where('stock0.tipo', '=', 'W')
            ->selectRaw("
                stock0.codigo as codigo,
                stock0.detalle as detalle,
                stock0.stock as stock,
                w_categorias.name AS name_categoria,
                w_product_extension.no_stock,
                w_categorie_product.wcategorie_id,
                w_product_extension.no_visible,
                w_tags.name as name_tag,
                stock0.RUBRO as rubro,
                stock0.SUBRUBRO as subrubro
            ");

        if (request('atributte_is_null') == 'true')
        {
            $query
                ->leftJoin('w_attribute_categorie', 'w_categorie_product.wcategorie_id', '=', 'w_attribute_categorie.wcategorie_id')
                ->leftJoin('w_attributes', 'w_attribute_categorie.wattribute_id', '=', 'w_attributes.id')
                ->leftJoin('w_attributevalues', 'w_attributevalues.wattribute_id', 'w_attributes.id')
                ->leftjoin('w_attribute_product', 'w_attribute_product.product_id', '=', 'stock0.codigo')
                ->where('w_attribute_product.product_id', "=", null);
        }

        if (is_array(request('attributes')) && request('attributes') > 0)
        {
            $query
                // ->join('w_attribute_categorie', 'w_categorie_product.wcategorie_id', '=', 'w_attribute_categorie.wcategorie_id')
                // ->join('w_attributes', 'w_attribute_categorie.wattribute_id', '=', 'w_attributes.id')
                // ->join('w_attributevalues', 'w_attributevalues.wattribute_id', 'w_attributes.id')
                ->join('w_attribute_product', 'w_attribute_product.product_id', '=', 'stock0.codigo')
                ->whereIn('w_attribute_product.attributeval_id', request('attributes'));
                // ->whereIn('w_attributevalues.id', request('attributes'));
        }

        if (is_array(request('tags')) && request('tags') > 0)
        {
            $query->whereIn('w_product_tag.tag_id', request('tags'));
        }

        if (is_array(request('category')) && request('category') > 0)
        {
            if (request('category')[0] == 'sinCategoria')
            {
                $query->where('w_categorias.name', null);
            }
            else
            {
                $categoria = Category::find(request('category')[0]);
                if($categoria->depth == 1)
                {
                    $query->whereIn('w_categorias.id', request('category'));
                }else
                {
                    $todascategorias = Category::select('id')->where('parent_id', request('category')[0])->get();
                    $arraycategorias = Arr::pluck($todascategorias, 'id');

                    $arraycategorias[] = [request('category')[0]];
                    $query->whereIn('w_categorias.id', $arraycategorias);

                }
            }
        }


        if (request('order'))
        {
            $columnIndex = request('order')[0]['column'];
            $columnName = request('columns')[$columnIndex]['name'];

            $query->orderBy($columnName, request('order')[0]['dir']);
        }

        if (request('search') && request('search.value') != '')
        {
            $query->where(function ($q)
            {
                $q->where("stock0.detalle", 'LIKE', '%' . request('search.value') . '%')
                    ->orWhere("stock0.codigo", 'LIKE', '%' . request('search.value') . '%')
                    ->orWhere("w_tags.name", 'LIKE', '%' . request('search.value') . '%');
                    // ->orWhere('w_group_disc_products.name', 'LIKE', '%' . request('search.value') . '%');
                    // ->orWhere("w_categorias.name", 'LIKE', '%' . request('search.value') . '%');
            });
        }

        foreach (request('columns') as $column)
        {
            if ($column['search'] && $column['search']['value'] != '')
            {
                $query->where($column['name'], 'LIKE', '%' . $column['search']['value'] . '%');
            }
        }
        $filtrados = $query->toBase()->getCountForPagination();

        if (request('start') && request('start') != 0)
        {
            $query->offset(request('start'));
        }

        if (request('length') && request('length') != 0)
        {
            $query->limit(request('length'));
        }

        $result = $query->get();
        ProductTransformer::fromArray($result, true);

        $response['draw'] = request('draw');
        $response['data'] = $result;
        $response['recordsTotal'] = $query->toBase()->getCountForPagination();
        $response['recordsFiltered'] = $filtrados;

        return $response;
    }

--}}



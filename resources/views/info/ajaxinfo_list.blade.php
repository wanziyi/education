                <table id="dataList" class="table table-bordered table-striped table-hover dataTable">
                    <thead>
                    
                    </thead>
                    <tbody>
                    @foreach($res as $v)
                        @if($v->is_del==0)
                    <tr id="{{$v->info_id}}">
                        <td><input  type="checkbox"></td>
                        <td>{{$v->info_id}}</td>
                        <td>{{$v->info_name}}</td>
                        <td>{{$v->info_content}}</td>
                        <td>{{date("Y-m-d H:i:s",$v->add_time)}}</td>
                        <td class="text-center">
                            <button type="button" class="btn bg-olive btn-xs del">删除</button>
                            <a href="{{url('info/info_upd/'.$v->info_id)}}">
                                <button type="button" class="btn bg-olive btn-xs">修改</button>
                            </a>
                        </td>
                    </tr>
                    @endif
                @endforeach
                <tr>
                    <td align="center" colspan="7">{{$res->appends(['info_name'=>$info_name])->links()}}</td>       
                </tr>
                    </tbody>

                </table>
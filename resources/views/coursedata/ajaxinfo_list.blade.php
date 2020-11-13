                    <table id="dataList" class="table table-bordered table-striped table-hover dataTable">
                        <thead>
                            
                        </thead>
                        <tbody>
                        @foreach($res as $v)
                            @if($v->is_del==0)
                        <tr id="{{$v->cd_id}}">
                            <td><input  type="checkbox"></td>
                            <td>{{$v->cd_id}}</td>
                            <td>{{$v->cd_title}}</td>
                            <td>{{$v->cd_name}}</td>
                            <td>{{$v->cd_text}}</td>
                            <td class="text-center">
                                <button type="button" class="btn bg-olive btn-xs del">删除</button>
                                <a href="{{url('coursedata/coursedata_upd/'.$v->cd_id)}}">
                                    <button type="button" class="btn bg-olive btn-xs">修改</button>
                                </a>
                            </td>
                        </tr>
                        @endif
                    @endforeach
                    <tr>
                        <td align="center" colspan="7">{{$res->appends(['cd_name'=>$cd_name])->links()}}</td>       
                    </tr>
                        </tbody>

                </table>
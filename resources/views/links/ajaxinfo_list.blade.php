                <table id="dataList" class="table table-bordered table-striped table-hover dataTable">
                    <thead>
                    
                    </thead>
                    <tbody>
                    @foreach($res as $v)
                        @if($v->is_del==0)
                    <tr id="{{$v->links_id}}">
                        <td><input  type="checkbox"></td>
                        <td>{{$v->links_id}}</td>
                        <td>{{$v->links_name}}</td>
                        <td>{{$v->links_url}}</td>
                        <td class="changevalue" field="links_show">{{$v->links_show?'是':'否'}}</td>
                        <td class="text-center">
                            <button type="button" class="btn bg-olive btn-xs del">删除</button>
                            <a href="{{url('links/links_upd/'.$v->links_id)}}">
                                <button type="button" class="btn bg-olive btn-xs">修改</button>
                            </a>
                        </td>
                    </tr>
                    @endif
                @endforeach
                <tr>
                    <td align="center" colspan="7">{{$res->appends(['links_name'=>$links_name])->links()}}</td>       
                </tr>
                    </tbody>

                </table>
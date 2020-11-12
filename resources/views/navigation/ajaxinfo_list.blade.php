                <table id="dataList" class="table table-bordered table-striped table-hover dataTable">
                    <thead>
                    
                    </thead>
                    <tbody>
                    @foreach($res as $v)
                        @if($v->is_del==0)
                    <tr id="{{$v->nav_id}}">
                        <td><input  type="checkbox"></td>
                        <td>{{$v->nav_id}}</td>
                        <td>{{$v->nav_name}}</td>
                        <td class="changevalue" field="nav_show">{{$v->nav_show?'是':'否'}}</td>
                        <td>{{date("Y-m-d H:i:s",$v->nav_time)}}</td>
                        <td class="text-center">
                            <button type="button" class="btn bg-olive btn-xs del">删除</button>
                            <a href="{{url('navigation/navigation_upd/'.$v->nav_id)}}">
                                <button type="button" class="btn bg-olive btn-xs">修改</button>
                            </a>
                        </td>
                    </tr>
                    @endif
                @endforeach
                <tr>
                    <td align="center" colspan="7">{{$res->appends(['nav_name'=>$nav_name])->links()}}</td>       
                </tr>
                    </tbody>

                </table>
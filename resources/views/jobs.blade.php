@extends('layouts.default')
@section('content')
    <div class="jobs">
        <div class="search">
            <form name="search" method="GET" action="{{ route('jobs') }}">
                <div class="keyword input-group">
                    <input name="keyword" type="text" class="form-control" placeholder="搜索职位、公司等关键字" aria-label="搜索职位、公司等关键字" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-red btn-search" type="button">搜索</button>
                    </div>
                </div>

                <div class="row no-gutters align-items-center justify-content-between mt-3">
                    <div class="col col-auto">
                        <div class="item row no-gutters align-items-center">
                            <div class="col col-auto">
                                <div class="title"><p>职位类型</p></div>
                            </div>
                            <div class="col col-auto">
                                <div class="custom-control custom-radio">
                                    <input checked type="radio" id="tag-all" name="tag" class="custom-control-input">
                                    <label class="custom-control-label" for="tag-all">全部</label>
                                </div>
                            </div>
                            <div class="col col-auto">
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="tag-headhunter" name="tag" class="custom-control-input">
                                    <label class="custom-control-label" for="tag-headhunter">猎头职位</label>
                                </div>
                            </div>
                            <div class="col col-auto">
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="tag-bluecollar" name="tag" class="custom-control-input">
                                    <label class="custom-control-label" for="tag-bluecollar">蓝领职位</label>
                                </div>
                            </div>
                            <div class="col col-auto">
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="tag-milkround" name="tag" class="custom-control-input">
                                    <label class="custom-control-label" for="tag-milkround">校招职位</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col col-auto">
                        <button class="btn btn-href gray-light">更多</button>
                    </div>
                </div>

                <div class="row no-gutters align-items-center justify-content-between mt-3">
                    <div class="col col-auto">
                        <div class="item row no-gutters align-items-center">
                            <div class="col col-auto">
                                <div class="title"><p>行业类别</p></div>
                            </div>
                            <div class="col col-auto">
                                <div class="custom-control custom-radio">
                                    <input checked type="radio" id="type-all" name="type" class="custom-control-input">
                                    <label class="custom-control-label" for="type-all">不限</label>
                                </div>
                            </div>
                            <div class="col col-auto">
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="type-1" name="type" class="custom-control-input">
                                    <label class="custom-control-label" for="type-1">互联网+技术</label>
                                </div>
                            </div>
                            <div class="col col-auto">
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="type-2" name="type" class="custom-control-input">
                                    <label class="custom-control-label" for="type-2">互联网+产品</label>
                                </div>
                            </div>
                            <div class="col col-auto">
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="type-3" name="type" class="custom-control-input">
                                    <label class="custom-control-label" for="type-3">互联网+运营</label>
                                </div>
                            </div>
                            <div class="col col-auto">
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="type-4" name="type" class="custom-control-input">
                                    <label class="custom-control-label" for="type-4">供应链/物流/运输</label>
                                </div>
                            </div>
                        </div>
                    </div>

                     <div class="col col-auto">
                        <button class="btn btn-href gray-light">更多</button>
                    </div>
                </div>

                <div class="row no-gutters align-items-center justify-content-between mt-3">
                    <div class="col col-auto">
                        <div class="item row no-gutters align-items-center">
                            <div class="col col-auto">
                                <div class="title"><p>地区</p></div>
                            </div>
                            <div class="col col-auto">
                                <div class="custom-control custom-radio">
                                    <input checked type="radio" id="city-all" name="city" class="custom-control-input">
                                    <label class="custom-control-label" for="city-all">不限</label>
                                </div>
                            </div>
                            <div class="col col-auto">
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="city-1" name="city" class="custom-control-input">
                                    <label class="custom-control-label" for="city-1">北京</label>
                                </div>
                            </div>
                            <div class="col col-auto">
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="city-2" name="city" class="custom-control-input">
                                    <label class="custom-control-label" for="city-2">上海</label>
                                </div>
                            </div>
                            <div class="col col-auto">
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="city-3" name="city" class="custom-control-input">
                                    <label class="custom-control-label" for="city-3">广州</label>
                                </div>
                            </div>
                            <div class="col col-auto">
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="city-4" name="city" class="custom-control-input">
                                    <label class="custom-control-label" for="city-4">深圳</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col col-auto">
                        <button class="btn btn-href gray-light">更多</button>
                    </div>
                </div>

                <div class="row no-gutters align-items-center justify-content-between mt-3">
                    <div class="col col-auto">
                        <div class="item row no-gutters align-items-center">
                            <div class="col col-auto">
                                <div class="title"><p>月薪范围</p></div>
                            </div>
                            <div class="col col-auto">
                                <div class="custom-control custom-radio">
                                    <input checked type="radio" id="salary-all" name="salary" class="custom-control-input">
                                    <label class="custom-control-label" for="salary-all">不限</label>
                                </div>
                            </div>
                            <div class="col col-auto">
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="salary-1" name="salary" class="custom-control-input">
                                    <label class="custom-control-label" for="salary-1">5k以下</label>
                                </div>
                            </div>
                            <div class="col col-auto">
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="salary-2" name="salary" class="custom-control-input">
                                    <label class="custom-control-label" for="salary-2">5k-10k</label>
                                </div>
                            </div>
                            <div class="col col-auto">
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="salary-3" name="salary" class="custom-control-input">
                                    <label class="custom-control-label" for="salary-3">10k-15k</label>
                                </div>
                            </div>
                            <div class="col col-auto">
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="salary-4" name="salary" class="custom-control-input">
                                    <label class="custom-control-label" for="salary-4">15k-25k</label>
                                </div>
                            </div>
                            <div class="col col-auto">
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="salary-5" name="salary" class="custom-control-input">
                                    <label class="custom-control-label" for="salary-5">25k-50k</label>
                                </div>
                            </div>
                            <div class="col col-auto">
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="salary-6" name="salary" class="custom-control-input">
                                    <label class="custom-control-label" for="salary-6">50k以上</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col col-auto">
                        <button class="btn btn-href gray-light">更多</button>
                    </div>
                </div>

                <div class="row no-gutters align-items-center justify-content-between mt-3">
                    <div class="col col-auto">
                        <div class="item select row no-gutters align-items-center">
                            <div class="col col-auto">
                                <div class="title"><p>更多</p></div>
                            </div>
                            <div class="col col-auto">
                                <select class="form-select" aria-label="发布时间">
                                    <option hidden selected>发布时间</option>
                                    <option value="1">今天发布</option>
                                    <option value="2">三天内</option>
                                    <option value="3">一周内</option>
                                    <option value="4">一月内</option>
                                </select>
                            </div>
                            <div class="col col-auto">
                                <select class="form-select" aria-label="工作经验">
                                    <option value="" hidden>工作经验</option>
                                    <option value="1">在校/应届</option>
                                    <option value="2">3年及以下</option>
                                    <option value="3">3-5年</option>
                                    <option value="4">5-10年</option>
                                    <option value="5">10年及以上</option>
                                </select>
                            </div>
                            <div class="col col-auto">
                                <select class="form-select" aria-label="学历要求">
                                    <option value="" hidden>学历要求</option>
                                    <option value="1">高中</option>
                                    <option value="2">大专</option>
                                    <option value="3">本科</option>
                                    <option value="4">硕士</option>
                                    <option value="5">博士</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="col col-auto">
                        <a class="btn btn-href gray-light" href="{{ route('jobs') }}">清空筛选条件</a>
                    </div>
                </div>
            </form>
        </div>

        <div class="divider"></div>

        <div class="list">
            <div class="tab">
                <div class="row align-items-center">
                    <div class="item col col-auto">
                        <p>推荐职位</p>
                    </div>
                </div>
            </div>

            <div class="body">
                @include("shared._job_list")
            </div>
        </div>
    </div>
@stop

@extends('layouts.admin')
@section('content')

						<!-- BEGIN PORTLET-->
						<div class="portlet box blue">
							<div class="portlet-title">
								<div class="caption"><i class="icon-reorder"></i>تعديل بيانات </div>
								<div class="tools">
									<a href="javascript:;" class="collapse"></a>
									<a href="javascript:;" class="remove"></a>
								</div>
							</div>
							<div class="portlet-body form">
								<!-- BEGIN FORM-->
                {!! Form::open(['method'=>'PATCH','route'=>['admin.partner.update',$partner->id],'files'=>'true']) !!}
								@if(Session::has('errors'))
								 <div class="row alert alert-danger">

										 @foreach(Session::get('errors')->all() as $error)
												 <div class="span6 m-wrap">
													{{$error}}
												 </div>
										 @endforeach

								 </div>
								@endif

                <div class="control-group">
                    <label class="control-label">Name <span class="required">*</span></label>
                    <div class="controls">
                      <input type="text" name="name_en" value="{{$partner->name_en}}" class="span6 m-wrap tooltips" data-trigger="hover" data-original-title="Name in English">
                    </div>
                  </div>

                  <div class="control-group">
                      <label class="control-label">الاسم <span class="required">*</span></label>
                      <div class="controls">
                        <input type="text" name="name_ar" value="{{$partner->name_ar}}" class="span6 m-wrap tooltips" data-trigger="hover" data-original-title="Name in Arabic">
                      </div>
                    </div>


                    <div class="control-group">
                      <label class="control-label">Description <span class="required">*</span></label>
                      <div class="controls">
                        <textarea class="span12 ckeditor m-wrap" name="desc_en" rows="3">{{$partner->desc_en}}</textarea>
                      </div>
                    </div>

                    <div class="control-group">
                  <label class="control-label">وصف <span class="required">*</span></label>
                  <div class="controls">
                    <textarea class="span12 ckeditor m-wrap" name="desc_ar" rows="3">{{$partner->desc_ar}}</textarea>
                  </div>
                </div>
								<div class="control-group">
									<label class="control-label">Additional Description <span class="required">*</span></label>
									<div class="controls">
										<textarea class="span12 ckeditor m-wrap" name="add_desc_en" rows="3">{{$partner->add_desc_en}}</textarea>
									</div>
								</div>

								<div class="control-group">
								<label class="control-label">وصف اضافى <span class="required">*</span></label>
								<div class="controls">
									<textarea class="span12 ckeditor m-wrap" name="add_desc_ar" rows="3">{{$partner->add_desc_ar}}</textarea>
								</div>
							</div>
							<div class="control-group">
							<label class="control-label">اضافه رابط <span class="required"></span></label>
							<div class="controls partener-link">
								<?php $links=json_decode($partner->links,true);?>
								@foreach($links as $link)
									<input type="text" name="links[]"  class="span6 m-wrap tooltips" data-trigger="hover" data-original-title="Link" value="{{$link}}">
								@endforeach
								<button id="add" type="button" class="btn yellow" name="add">+</button>
							</div>
						</div>
									<div class="control-group">
										<label class="control-label">لوجو</label>
										<div class="controls">
											<div class="fileupload fileupload-new" data-provides="fileupload">
												<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
													<img src='{{URL("$partner->image")}}' alt="">
												</div>
												<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
												<div>
													<span class="btn btn-file"><span class="fileupload-new">تغيير الصوره</span>
													<!-- <span class="fileupload-exists">Change</span> -->
													<input type="file" name="image" class="default"></span>
													<a href="#" class="btn red fileupload-exists" data-dismiss="fileupload">حذف</a>
												</div>
											</div>
											<!-- <span class="label label-important">NOTE!</span>
											<span>
											Attached image thumbnail is
											supported in Latest Firefox, Chrome, Opera,
											Safari and Internet Explorer 10 only
											</span> -->
										</div><br>
                    <div class="form-actions">
                   <button type="submit" class="btn blue">تعديل</button>
                 </div>
									</div>
							{!! Form::close() !!}
								<!-- END FORM-->
							</div>
						</div>
						<!-- END PORTLET-->
@endsection

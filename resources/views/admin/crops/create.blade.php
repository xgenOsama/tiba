@extends('layouts.admin')
@section('content')


						<!-- BEGIN PORTLET-->
						<div class="portlet box blue">
							<div class="portlet-title">
								<div class="caption"><i class="icon-reorder"></i>اضافة </div>
								<div class="tools">
									<a href="javascript:;" class="collapse"></a>
									<a href="javascript:;" class="remove"></a>
								</div>
							</div>
							<div class="portlet-body form">
								<!-- BEGIN FORM-->
                {!! Form::open(['route'=>'admin.crop.store','files'=>'true']) !!}
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
  										<label class="control-label">Title <span class="required">*</span></label>
  										<div class="controls">
  											<input type="text" name="title_en" class="span6 m-wrap tooltips" data-trigger="hover" data-original-title="Title in English">
  										</div>
  									</div>

                    <div class="control-group">
                        <label class="control-label">العنوان <span class="required">*</span></label>
                        <div class="controls">
                          <input type="text" name="title_ar" class="span6 m-wrap tooltips" data-trigger="hover" data-original-title="Title in Arabic">
                        </div>
                      </div>


                      <div class="control-group">
    										<label class="control-label">Description <span class="required">*</span></label>
    										<div class="controls">
    											<textarea class="span12 ckeditor m-wrap" name="desc_en" rows="3"></textarea>
    										</div>
    									</div>

                      <div class="control-group">
										<label class="control-label">وصف <span class="required">*</span></label>
										<div class="controls">
											<textarea class="span12 ckeditor m-wrap" name="desc_ar" rows="3"></textarea>
										</div>
									</div>
									<div class="control-group" style="display:inline;" >
										<label class="control-label">Images Upload (رفع الصور)</label>
                  <div class="controls">
                    <div class="fileupload fileupload-new" data-provides="fileupload">
                      <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                        <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="">
                      </div>
                      <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                      <div>
                        <span class="btn btn-file"><span class="fileupload-new">الرجاء اختيار صوره</span>
                        <!-- <span class="fileupload-exists">Change</span> -->
                        <input type="file" name="image" class="default"></span>
                        <a href="#" class="btn red fileupload-exists" data-dismiss="fileupload">حذف</a>
                      </div>
                    </div>
										<div class="fileupload fileupload-new" data-provides="fileupload">
                      <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                        <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="">
                      </div>
                      <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                      <div>
                        <span class="btn btn-file"><span class="fileupload-new">الرجاء اختيار صوره</span>
                        <!-- <span class="fileupload-exists">Change</span> -->
                        <input type="file" name="image1" class="default"></span>
                        <a href="#" class="btn red fileupload-exists" data-dismiss="fileupload">حذف</a>
                      </div>
                    </div>
										<div class="fileupload fileupload-new" data-provides="fileupload">
                      <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                        <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="">
                      </div>
                      <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                      <div>
                        <span class="btn btn-file"><span class="fileupload-new">الرجاء اختيار صوره</span>
                        <!-- <span class="fileupload-exists">Change</span> -->
                        <input type="file" name="image2" class="default"></span>
                        <a href="#" class="btn red fileupload-exists" data-dismiss="fileupload">حذف</a>
                      </div>
                    </div>
										<div class="fileupload fileupload-new" data-provides="fileupload">
                      <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                        <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="">
                      </div>
                      <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                      <div>
                        <span class="btn btn-file"><span class="fileupload-new">الرجاء اختيار صوره</span>
                        <!-- <span class="fileupload-exists">Change</span> -->
                        <input type="file" name="image3" class="default"></span>
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
								</div>

								<div class="control-group">
										<label class="control-label">File Upload (رفع الملفات)</label>
										<div class="controls">
											<p>{{trans('home.crop_1')}}</p>
											<div class="fileupload fileupload-new" data-provides="fileupload"><input type="hidden" value="" name="">
												<div class="input-append">
													<div class="uneditable-input">
														<i class="icon-file fileupload-exists"></i>
														<span class="fileupload-preview"></span>
													</div>
													<span class="btn btn-file">
													<span class="fileupload-new">Select file</span>
													<span class="fileupload-exists">Change</span>
													<input type="file" class="default" name="file1">
													</span>
													<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
												</div>
											</div>
										</div>
										<div class="controls">
										<p>{{trans('home.crop_2')}}</p>
											<div class="fileupload fileupload-new" data-provides="fileupload"><input type="hidden" value="" name="">
												<div class="input-append">
													<div class="uneditable-input">
														<i class="icon-file fileupload-exists"></i>
														<span class="fileupload-preview"></span>
													</div>
													<span class="btn btn-file">
													<span class="fileupload-new">Select file</span>
													<span class="fileupload-exists">Change</span>
													<input type="file" class="default" name="file2">
													</span>
													<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
												</div>
											</div>
										</div>
										<div class="controls">
										<p>{{trans('home.crop_3')}}</p>
											<div class="fileupload fileupload-new" data-provides="fileupload"><input type="hidden" value="" name="">
												<div class="input-append">
													<div class="uneditable-input">
														<i class="icon-file fileupload-exists"></i>
														<span class="fileupload-preview"></span>
													</div>
													<span class="btn btn-file">
													<span class="fileupload-new">Select file</span>
													<span class="fileupload-exists">Change</span>
													<input type="file" class="default" name="file3">
													</span>
													<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
												</div>
											</div>
										</div>
									</div>

                    <div class="form-actions">
                   <button type="submit" class="btn blue">حفظ</button>
                 </div>
									</div>
							{!! Form::close() !!}
								<!-- END FORM-->
							</div>
						</div>
						<!-- END PORTLET-->

@endsection

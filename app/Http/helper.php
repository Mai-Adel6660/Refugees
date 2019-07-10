<?php
if(!function_exists('aurl')){
	function aurl($url=null)
	{
		return url('admin/'.$url);
	}
}

if(!function_exists('setting')){
	function setting()
	{
		return \App\Model\Settings::orderBy('id','desc')->first(); //to fetch last  value from model 
	}
}

if(!function_exists('load_dep')){
	function load_dep($select=null, $dep_hide=null)
	{
		$departments =\App\Model\Department::selectRaw('dep_name_'.session('lang'). ' as text')
					->selectRaw('id as id')
					->selectRaw('parent as parent')
					->get(['text, id, parent']); //objects
		$dep_arr = [];
		foreach ($departments as $department) {
			$list_ar = [];
			//open category
			$list_ar['icon'] 	= ''; //All these in jsTree
			$list_ar['li_attr']	= '';
			$list_ar['a_attr'] 	= '';
			$list_ar['children']= [];

			if($select !== null and $select==$department->id){
				
				$list_ar['state'] = [
					'opend'	  =>true,
					'selected'=>true,
					'disabled' =>false
				];
			}

			//in edit 
			if($dep_hide !== null and $dep_hide==$department->id){
				
				$list_ar['state'] = [
					'opend'	  =>false,
					'selected'=>false,
					'disabled' =>true,
					'hidden'  =>true
				];
			}

			$list_ar['id'] =$department->id;
			$list_ar['parent'] =$department->parent !==null?$department->parent:'#';
			$list_ar['text']	=$department->text;
			array_push($dep_arr, $list_ar);//array_push(array, var)
			
		}
		//turn these data into json
		return json_encode($dep_arr, JSON_UNESCAPED_UNICODE); //array to json
															  //JSON_UNESCAPED_UNICODE=>turn from utf to js
	}
}
//used in products size weight
if(!function_exists('get_parent')){
	function get_parent($dep_id)
	{
		//$list_department = [];
		$department =\App\Model\Department::find($dep_id);

		if($department->parent!=null && $department->parent >0){
			//array_push($list_department, $dep_id);
			get_parent($department->parent) . "," . $dep_id;
		}else{
			return $dep_id;
		}

		//return $list_department;
	}
}

if(!function_exists('up')){
	function up()
	{
		return new \App\Http\Controllers\UploadController; //upload func 
	}
}

if(!function_exists('adguard')){ //admin auth guard
	function adguard()
	{
		return auth()->guard('admin');
	}
}

if(!function_exists('active_menu')){
	function active_menu($link)
	{
		//User|admin/i
		if(preg_match('/'.$link .'/i', Request::segment(2))){
			return['menu-open', 'display:block'];
		}else{
			return['', ''];
		}
	}
}

if(!function_exists('lang')){
	function lang()
	{
		if(session()->has('lang')){
			return session('lang');
		}else{
			return 'en';
			//session()->put('lang', setting()->main_lang); //for new visitor=>to save lang in session
			//return setting()->main_lang;
		}
	}
}

if(!function_exists('direction')){
	function direction()
	{
		if(session()->has('lang')){
			if(session('lang')=='ar'){return 'rtl';}
			else{return 'ltr';}
		}else{
			return 'ltr';
		}
	}
}

if(!function_exists('datatable_lang')){
	function datatable_lang()
	{
		return [
			'sProcessing'=> trans('admin.sProcessing'),
            'sLengthMenu'       => trans('admin.sLengthMenu'),
            'sZeroRecords'      => trans('admin.sZeroRecords'),
            'sEmptyTable'       => trans('admin.sEmptyTable'),
            'sInfo'             => trans('admin.sInfo'),
            'sInfoEmpty'        => trans('admin.sInfoEmpty'),
            'sInfoFiltered'     => trans('admin.sInfoFiltered'),
            'sInfoPostFix'      => trans('admin.sInfoPostFix'),
            'sSearch'           => trans('admin.sSearch'),
            'sUrl'              => trans('admin.sUrl'),
            'sInfoThousands'    => trans('admin.sInfoThousands'),
            'sLoadingRecords'   => trans('admin.sLoadingRecords'),
            'oPaginat'          => [
                'sFirst'            => trans('admin.sFirst'),
                'sLast'             => trans('admin.sLast'),
                'sNext'             => trans('admin.sNext'),
                'sPrevious'         => trans('admin.sPrevious')
            ], 
            'oAria' => [
                'sSortAscending'  => trans('admin.sSortAscending'),
                'sSortDescending' => trans('admin.sSortDescending'),
            ]
		];
	}
}

////////////validate functions/////////////
if(!function_exists('v_image')){
	function v_image($ext=null)
	{
		if($ext===null){
			return 'image|mimes:jpg,jpeg,png,bmp,gif'; 
		}else{
			return 'image|mimes:'.$ext;
		}
	}
}

////////////validate functions/////////////

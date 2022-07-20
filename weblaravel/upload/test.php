//upload file
    // public function upload(){
    //     return view ('admin.upload');
    // }

    // public function uploads(Request $red){
    //     if($red->has('file')){
    //         $file = $red->file;
    //         $file_name = $file->getClientOriginalName(); //lay ten file
    //         //upload
    //         $file->move(base_path('admin.add_category_product'),$file_name);
    //     }
        
    // }
    // public function postFile(Request $request){
    //     if($request->hasFile('myFile'))
    //         {
    //             $file=$request->file('myFile');
    //             $file->move('img','myfile.jpg');
    //         }
    //         else  
    //         {
    //             echo"Chưa có file";
    //         }
    // }
    // public function uploadFile(Request $request){
    //     $request->validate([
    //     'file' => 'required|mimes:png,jpg,jpeg|max:1024|min:2'
    //     ]);

    //     $file = new tbl_category_product;

    //     if($request->file()) {
    //         $name = time().'_'.$request->file->getClientOriginalName();
    //         $filePath = $request->file('file')->storeAs('uploads', $name, 'public');

    //         $file->name = time().'_'.$request->file->getClientOriginalName();
    //         $file->file = '/storage/' . $filePath;
    //         $file->save();

    //         return back()
    //         ->with('success','File has uploaded to the database.')
    //         ->with('file', $name);
    //     }
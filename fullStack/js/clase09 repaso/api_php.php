Route::get('conteo', function() {
  $montoto = collect([1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16])->count();

  return response()->json(["cantidad" => $montoto]);
});
<input type="text" name="title" value="{{ old('title') }}" class="form-control" placeholder="Tuliskan Judul">
                @if($errors->has('title'))
                  <p> {{ $errors->first('title') }} </p>
                @endif
              </div>
              <!-- /.box-header -->
              <div class="box-body pad">

                      <textarea id="post" name="post" value="{{ old('post') }}" rows="10" cols="80" placeholder="Silahkan tulis artikel untuk Fosti">

                      </textarea><br>
                      @if($errors->has('post'))
                         {{ $errors->first('post') }} 
                      @endif

                      Image
                      <input type="file" name="img" value="">

                      @if($errors->has('img'))
                        <p> {{ $errors->first('img') }} </p>
                      @endif
                      <br>

                      <input class="btn btn-primary btn-flat" type="submit" name="submit" value="CREATE">
                      {{ csrf_field() }}
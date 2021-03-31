
    <div class="col-12 col-lg-9 col-xl-7 m-auto">
        <div class="card">
            <div class="card-body p-3 p-md-5">

                    <div class="form-group">
                      <label for="title">Title</label>
                      <input type="text" name="title" id="title" class="form-control"  placeholder="Enter Song Title" value="{{ ($song ? $song->title : '') ?? old('title')  }}">
                    </div>

                    <div class="form-group">
                      <label for="author">Author</label>
                      <input type="text" name="author" id="author" class="form-control"  placeholder="Enter Song Author" value="{{ ($song ? $song->author : '') ?? old('author')  }}">
                    </div>

                    <div class="form-group">
                      <label for="lyrics">Lyrics </label>
                      <textarea class="form-control" id="lyrics" name="lyrics" rows="10" placeholder="Enter Lyrics . . .">{{ ($song ? $song->lyrics : '') ?? old('lyrics')  }}</textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">{{ $button }}</button>

            </div>
        </div>
    </div>

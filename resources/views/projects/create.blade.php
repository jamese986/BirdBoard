@extends ('layouts.app')

@section('content')
  <section>
      <div>
        <h1 class="title">Create a New Project </h1>
      </div>
    </section>

      <form method="POST" action="/projects">
        @csrf
        <div class="field">
          <label class="label" for="title">Project Title</label>
              <div class="control">
                <textarea name="description" cols="30" rows="1" class="textarea"></textarea>
              </div>
        </div>

        <div class="field">
          <label class="label" for="description">Project Description</label>
              <div class="control">
                <textarea name="description" cols="30" rows="10" class="textarea"></textarea>
              </div>
        </div>

        <div class="field">
          <div class="control">
            <button class="button is-link" type="submit">Create Project</button>
              <a href="/projects">Cancel</a>
          </div>
        </div>
      </form>
@stop

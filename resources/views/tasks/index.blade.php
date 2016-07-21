@extends('layouts.app')

@section('content')

    <div>
        @include('common.errors')

        <form>
            {{ csrf_field() }}

            <div>
                <label>Task</label>

                <div>
                    <input type="text">
                </div>
            </div>

            <div>
                <div>
                    <button>
                        <i></i>
                    </button>
                </div>
            </div>
        </form>
    </div>

@endsection
@extends('dashboard.layouts.app')
@section('content')

        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h1>Html Editors</h1>
                    <nav class="breadcrumb-container d-none d-sm-block d-lg-inline-block" aria-label="breadcrumb">
                        <ol class="breadcrumb pt-0">
                            <li class="breadcrumb-item">
                                <a href="#">Home</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="#">Library</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Data</li>
                        </ol>
                    </nav>
                    <div class="separator mb-5"></div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">

                    <div class="card mb-4">
                        <div class="card-body ">
                            <h5 class="mb-4">CKEditor </h5>
                            <textarea name="content" id="ckEditorClassic"></textarea>
                        </div>
                    </div>

                    <div class="card mb-4">
                        <div class="card-body ">
                            <h5 class="mb-4">Quill Standart</h5>
                            <div class="html-editor" id="quillEditor"></div>
                        </div>
                    </div>

                    <div class="card mb-4">
                        <div class="card-body ">
                            <h5 class="mb-4">Quill Bubble</h5>
                            <div class="html-editor-bubble" id="quillEditorBubble"></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        @endsection
@extends('layouts.app')

@section('title', '記事編集')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mb-5">
                <div class="card-header">
                    <h3 class="text-center my-2"><i class="fas fa-pen mr-2"></i>記事編集</h3>
                </div>
                <form>                   
                    <div class="card-body col-md-8 mx-auto">
                        <div class="form-group row">
                            <p class="col-md-12 text-center"><span class="text-danger">(※)</span>は入力必須項目です。</p>
                        </div>                            
                        <div class="form-group mb-4">
                            <label for="title">記事タイトル<span class="text-danger">(※)</span></label>
                            <input type="text" class="form-control" id="title">
                            <small id="url" class="form-text text-muted">50文字以内で入力してください。</small>

                            {{-- エラー発生時フォーム↓ --}}
                            {{-- <label for="title">記事タイトル<span class="text-danger">(※)</span></label>
                            <input type="text" class="form-control is-invalid" id="title">
                            <small id="url" class="form-text text-muted">50文字以内で入力してください。</small> --}}
                            
                            {{-- 記事タイトルについてのエラーメッセージを表示 --}}
                                {{-- <span class="invalid-feedback" role="alert">
                                    <strong>エラーメッセージ</strong>
                                </span> --}}
                        </div>
                        <div class="form-group mb-4">
                            <p>カテゴリー<span class="text-danger">(※)</span></p>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio">
                                    <label class="form-check-label">ラジオ1</label>
                                </div>                        
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio">
                                    <label class="form-check-label">ラジオ2</label>
                                </div>                        
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio">
                                    <label class="form-check-label">ラジオ3</label>
                                </div>                        
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio">
                                    <label class="form-check-label">ラジオ4</label>
                                </div>
                                {{-- エラー発生時ボタン↓--}}
                                {{-- <div class="form-check form-check-inline">
                                    <input class="form-check-input is-invalid" type="radio">
                                    <label class="form-check-label is-invalid">ラジオ1</label>
                                </div>                        
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input is-invalid" type="radio">
                                    <label class="form-check-label is-invalid">ラジオ2</label>
                                </div>                        
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input is-invalid" type="radio">
                                    <label class="form-check-label is-invalid">ラジオ3</label>
                                </div>                        
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input is-invalid" type="radio">
                                    <label class="form-check-label is-invalid">ラジオ4</label>
                                </div>                         --}}
                            
                            {{-- 記事タイトルについてのエラーメッセージを表示 --}}
                                {{-- <span class="invalid-feedback" role="alert">
                                    <strong>エラーメッセージ</strong>
                                </span> --}}
                        </div>
                        <div class="form-group mb-4">
                            <label>記事概要<span class="text-danger">(※)</span></label>
                            <textarea class="form-control" id="summary"rows="6">記事概要</textarea>
                            <small id="url" class="form-text text-muted">30文字以上で入力してください。</small>
                            
                            {{-- エラー発生時フォーム↓ --}}
                            {{-- <label>記事概要<span class="text-danger">(※)</span></label>
                            <textarea class="form-control is-invalid " id="summary"rows="6">記事概要</textarea>
                            <small id="url" class="form-text text-muted">30文字以上で入力してください。</small> --}}

                            {{-- 記事タイトルについてのエラーメッセージを表示 --}}
                                {{-- <span class="invalid-feedback" role="alert">
                                    <strong>エラーメッセージ</strong>
                                </span> --}}
                        </div>
                        <div class="form-group mb-4">
                            <label>記事URL<span class="text-danger">(※)</span></label>
                            <input class="form-control" id="url">
                            <small id="url" class="form-text text-muted">Qiitaの記事のURLを入力してください。</small>
                            
                            {{-- エラー発生時フォーム↓ --}}
                            {{-- <label>記事URL<span class="text-danger">(※)</span></label>
                            <input class="form-control is-invalid" id="url">
                            <small id="url" class="form-text text-muted">Qiitaの記事のURLを入力してください。</small> --}}
                            
                            {{-- 記事タイトルについてのエラーメッセージを表示 --}}
                                {{-- <span class="invalid-feedback" role="alert">
                                    <strong>エラーメッセージ</strong>
                                </span> --}}
                        </div>                        
                        <button class="btn btn-block btn-success col-md-4 mx-auto py-2 mt-5">
                            更新する
                        </button>
                        <a class='btn btn-block btn-secondary text-white col-md-4 mx-auto py-2  mb-4'>戻る</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

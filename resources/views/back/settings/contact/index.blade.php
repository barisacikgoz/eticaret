@extends('back.layouts.master')
@section('content')
    <div class="content-wrapper">
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h3 class="text-center mb-4">Firma Bilgileri<hr class="bg-danger"></h3>
                    @foreach($contacts as $contact)
                    <form action="{{ route('admin.contact.update', $contact->id) }}" method="post" class="form-sample">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Ünvan</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="settings_appellation" value="{{ $contact->settings_appellation }}" required/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Form Mail</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="settings_form_mail" value="{{ $contact->settings_form_mail }}" required/>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Firma Hakkında</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="settings_about_the_company" value="{{ $contact->settings_about_the_company }}" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Facebook</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="settings_facebook" value="{{ $contact->settings_facebook }}"/>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Çalışma Saatleri</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="settings_working_hours" value="{{ $contact->settings_working_hours }}" required/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Twitter</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="settings_twitter" value="{{ $contact->settings_twitter }}"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Adres</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="settings_address" value="{{ $contact->settings_address }}" required/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">İnstagram</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="settings_instagram" value="{{ $contact->settings_instagram }}"/>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Tel 1</label>
                                    <div class="input-group col-sm-9">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text text-white" style="height: 46px">+09</span>
                                        </div>
                                        <input type="text" class="form-control" name="settings_phone_1" maxlength="11" value="{{ $contact->settings_phone_1 }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Google+</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="settings_google" value="{{ $contact->settings_google }}"/>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Tel 2</label>
                                    <div class="input-group col-sm-9">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text text-white" style="height: 46px">+09</span>
                                        </div>
                                        <input type="text" class="form-control" name="settings_phone_2" maxlength="11" value="{{ $contact->settings_phone_2 }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Linkedin</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="settings_linkedin" value="{{ $contact->settings_linkedin }}"/>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Mail 1</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="settings_mail_1" value="{{ $contact->settings_mail_1 }}" required/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Maps - Haritayı yerleştir kısmındaki sadece url adresini yapıştırın.</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="settings_maps" value="{{ $contact->settings_maps }}" required/>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Mail 2</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="settings_mail_2" value="{{ $contact->settings_mail_2 }}"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                </div>
                            </div>
                        </div>

                        <a href="{{ route('admin.contact.index') }}" class="btn btn-danger float-right">Sil</a>
                        <button type="submit" class="btn btn-primary float-right mr-2" onclick="showSwal('success-message')">Güncelle</button>
                    </form>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection

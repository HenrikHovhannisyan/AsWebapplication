@extends('admin.layouts.app')

@section('content')

    @extends('admin.layouts.header')

    <main>
        <div class="main-container">
            <div class="dashboard-title">
                <img src="{{ asset('images/Admin_Dashboard_Contacts_Icon_1.png') }}" class="icon" alt="contact icon">
                <h1>Geschäftsführer</h1>
            </div>
            <div class="dashboard-content">
                <div class="workers-name-list">
                    <div class="workers-search-bar">
                        <form action="">
                            <input type="text" placeholder="Geschäftspartner suchen">
                        </form>
                    </div>
                    <div class="workers-items-list">
                        @foreach($data as $user)
                            <div class="workers-item">
                                <div class="worker-image">
                                    <img src="{{ asset('images/Admin_Dashboard_Avatar_1.png') }}" alt="worker image">
                                </div>
                                <div class="worker-name">{{ $user->name }}</div>
                                <div class="worker-level">
                                <span>
                                    Stufe {{ $user->verwalten->stufe }} ; {{ $user->verwalten->punkte }} Punkte
                                </span>
                                    <div class="progress-bar">
                                        <div class="color-fill" style="width: {{ $user->verwalten->stufe * 12.5 }}%"></div>
                                    </div>
                                </div>
                                <a href="{{ route('verwalten.edit',$user->id) }}" class="administer-btn">Verwalten</a>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="add-buttons">
                    <button data-toggle="modal" data-target=".newsletter-modal">
                        <span>Newsletter hinzufügen</span>
                        <img src="{{ asset('images/Admin_Dashboard_Add_Alert_Icon_1.png') }}" alt="add newsletter alert">
                    </button>

                    <button data-toggle="modal" data-target=".worker-modal">
                        <span>Geschäftspartner hinzufügen</span>
                        <img src="{{ asset('images/Admin_Dashboard_Person_Add_Icon_1.png') }}" alt="add manager">
                    </button>
                </div>
            </div>
        </div>
    </main>


    <!-- add newsletter modal -->
    <div class="newsletter-modal modal fade bd-example-modal-lg" tabindex="-1" role="dialog"
         aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="body-content">
                        <div class="left-side">
                            <h1 class="title">Newsletter erstellen</h1>
                            <form action="" class="newsletter-form">
                                <div class="form-item">
                                    <label for="newsletterTitle">Titel*</label>
                                    <input type="text" id="newsletterTitle" required>
                                </div>
                                <div class="form-item">
                                    <label for="newsletterText">Text*</label>
                                    <textarea name="" id="newsletterText" placeholder="TEXT" required></textarea>
                                </div>
                                <div class="form-buttons">
                                    <button>Senden</button>
                                    <button class="cancel-btn" data-dismiss="modal" aria-label="Close">Cancel</button>
                                </div>
                            </form>
                        </div>
                        <div class="right-side">
                            <div class="modal-workers-item">
                                <div class="image"><img src="images/Admin_Dashboard_Avatar_1.png" alt="avatar"></div>
                                <div class="name">Max Mustermann</div>
                                <label class="container">
                                    <input type="checkbox" checked="checked">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="modal-workers-item">
                                <div class="image"><img src="images/Admin_Dashboard_Avatar_1.png" alt="avatar"></div>
                                <div class="name">Max Mustermann</div>
                                <label class="container">
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="modal-workers-item">
                                <div class="image"><img src="images/Admin_Dashboard_Avatar_1.png" alt="avatar"></div>
                                <div class="name">Max Mustermann</div>
                                <label class="container">
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="modal-workers-item">
                                <div class="image"><img src="images/Admin_Dashboard_Avatar_1.png" alt="avatar"></div>
                                <div class="name">Max Mustermann</div>
                                <label class="container">
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="modal-workers-item">
                                <div class="image"><img src="images/Admin_Dashboard_Avatar_1.png" alt="avatar"></div>
                                <div class="name">Max Mustermann</div>
                                <label class="container">
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="modal-workers-item">
                                <div class="image"><img src="images/Admin_Dashboard_Avatar_1.png" alt="avatar"></div>
                                <div class="name">Max Mustermann</div>
                                <label class="container">
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="modal-workers-item">
                                <div class="image"><img src="images/Admin_Dashboard_Avatar_1.png" alt="avatar"></div>
                                <div class="name">Max Mustermann</div>
                                <label class="container">
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- add worker modal -->
    <div class="worker-modal modal fade bd-example-modal-lg" tabindex="-1" role="dialog"
         aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="title">Geschäftspartner hinzufügen</h1>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="body-content">
                        <div class="left-side">
                            <h1 class="second-title">DATEN</h1>
                            <form action="" class="worker-form">
                                <div class="form-item w-small">
                                    <label for="workerUsername">Benutzername*</label>
                                    <input type="text" id="workerUsername" required>
                                </div>
                                <div class="form-item w-small">
                                    <label for="workerUsername">Role</label>
                                    <select name="" id="">
                                        <option value="" selected>Select</option>
                                        <option value="">Select</option>
                                        <option value="">Select</option>
                                    </select>
                                </div>
                                <div class="form-item width-100">
                                    <label for="workerEmail">Email*</label>
                                    <input type="text" id="workerEmail" placeholder="email@address.com" required>
                                </div>
                                <div class="form-item w-small">
                                    <label for="workerName">First Name</label>
                                    <input type="text" id="workerName" placeholder="Max">
                                </div>
                                <div class="form-item w-small">
                                    <label for="workerLastName">Last Name</label>
                                    <input type="text" id="workerLastName" placeholder="Mustermann">
                                </div>
                                <div class="form-buttons">
                                    <button>Add User</button>
                                    <button class="cancel-btn" data-dismiss="modal" aria-label="Close">Cancel</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

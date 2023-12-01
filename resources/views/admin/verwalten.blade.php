@extends('admin.layouts.app')

@section('content')

    <main class="manage-workers-main">
        <div class="main-container">
            <div class="dashboard-title">
                <img src="{{asset('images/Admin_Dashboard_Contacts_Icon_1.png')}}" class="icon" alt="contact icon">
                <h1>Geschäftpartner Max Mustermann verwalten</h1>
                <a href="{{ route('admin.home') }}" class="back-btn">
                    <img src="{{ asset('images/Admin_Dashboard_Fast_Rewind_Icon_1.png') }}" alt="back icon">
                    <span>Zurück</span>
                </a>
            </div>
            <div class="content">
                <div class="worker-details">
                    <div class="worker-image"><img src="{{ asset('images/Admin_Dashboard_Avatar_1.png') }}"
                                                   alt="worker image"></div>
                    <div class="worker-name">Max Mustermann</div>
                    <div class="worker-level">
                        <span>
                            Stufe {{ $verwalten->stufe }} ; {{ $verwalten->punkte }} Punkte
                        </span>
                        <div class="progress-bar">
                            <div class="color-fill" style="width: {{ $punkte_procent }}%"></div>
                        </div>
                    </div>
                </div>
                <div class="worker-estimate">
                    <form action="{{ route('verwalten.update',$verwalten->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="input-fields">
                            <div class="form-item">
                                <label for="provision">Provision:</label>
                                <input type="number" min="3" max="6" value="3" id="provision" name="percent"
                                       placeholder="3-6%" required>
                            </div>
                            <div class="form-item">
                                <label for="punkte">Punkte:</label>
                                <input type="number" min="0" id="punkte" name="punkte" placeholder="...">
                            </div>
                            <div class="form-item item-3">
                                <label for="kaufanbot">Kaufanbot:</label>
                                <input type="number" min="0" id="kaufanbot" name="kaufanbot" placeholder="400.000"
                                       required>
                            </div>
                            <div class="form-item item-4">
                                <label for="stufe">Stufe:</label>
                                <input type="text" id="stufe" name="stufe" placeholder="...">
                            </div>
                            <button type="button" class="calculate-btn" id="btn_calc">Rechnen</button>
                        </div>
                        <button class="overwrite-points-btn">
                            Die Punkte & STUFE überschreiben
                        </button>
                    </form>

                    <div class="deduct-points">
                        <form action="{{ route('verwalten.abziehen',$verwalten->id) }}" method="POST">
                            @csrf
                            <label for="deductPoints">Punkte abziehen:</label>
                            <input type="number" name="abziehen_value" min="0" id="deductPoints">
                            <button>Abziehen</button>
                        </form>
                    </div>
                </div>
                <div class="results-table">
                    <table>
                        <tr>
                            <th>Entwicklungsstufe</th>
                            <th>Benötigte Punkte</th>
                            <th>Provision</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>..</td>
                            <td>25%</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>100</td>
                            <td>30%</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>750</td>
                            <td>35%</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>2.500</td>
                            <td>40%</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>6.500</td>
                            <td>45%</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>15.000</td>
                            <td>50%</td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>30.000</td>
                            <td>55%</td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>50.000</td>
                            <td>60%</td>
                        </tr>
                    </table>
                </div>
            </div>

        </div>
    </main>
@endsection

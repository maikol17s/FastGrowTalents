<div class="MainContainer">
    <div class="MainContentArea">
        <h1 class="title-postulations">OFFERS AND APPLICANTS</h1>
        <div class="container-table">
            <table class="table-container">
                <thead>
                    <tr>
                        <th>NO. OFERTA</th>
                        <th>POSTULANTE</th>
                        <th>ACTIONS</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($postulations->isEmpty())
                        <tr>
                            <td colspan="3">No data.</td>
                        </tr>
                    @else
                        @foreach ($postulations as $postulation)
                            <tr>
                                <td>{{ $postulation->offer_id }}</td>
                                <td>{{ $postulation->user->name }}</td>
                                <td>
                                    <div>
                                        <button class="show-btn">
                                            <i class="fas fa-file-alt"></i>CV
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>

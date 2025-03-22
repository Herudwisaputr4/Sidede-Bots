<x-master-admin>
    <div class="container-fluid">
        <h1 class="main-title text-center" style="font-size: 24px; padding: 20px;">Welcome Dashboard, Master Admin</h1>
        <div class="row stat-cards justify-content-center">
            <!-- Card Total Sekolah -->
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                <article class="stat-cards-item text-center">
                    <div class="stat-cards-info">
                        <p class="stat-cards-info__title">Total Sekolah</p>
                        <div class="stat-cards-icon primary">
                            <i data-feather="home" aria-hidden="true"></i>
                        </div>
                        <p class="stat-cards-info__num">{{$totalSekolah}}</p>
                    </div>
                </article>
            </div>

            <!-- Card Total Admin -->
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                <article class="stat-cards-item text-center">
                    <div class="stat-cards-info">
                        <p class="stat-cards-info__title">Total Admin</p>
                        <div class="stat-cards-icon primary">
                            <i data-feather="user" aria-hidden="true"></i>
                        </div>
                        <p class="stat-cards-info__num">{{$totalAdmin}}</p>
                    </div>
                </article>
            </div>
        </div>
    </div>
</x-master-admin>
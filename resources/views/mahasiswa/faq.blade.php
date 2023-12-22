@extends('mahasiswa.template.layout')
@section("title", "FAQ | Mahasiswa")

@section('body')

  <!-- Content -->
  <div class="container-xxl flex-grow-1 container-p-y">
    <div class="faq-header d-flex flex-column justify-content-center align-items-center">
      <h3 class="text-center text-primary mb-2">Hallo, ada yang bisa dibantu?</h3>
      <p class="text-body text-center mb-0 px-3">Pilih kategori pertanyaanmu, agar mendapat jawaban!</p>
      
    </div>

    <div class="row mt-4">
      <!-- Navigation -->
      <div class="col-lg-3 col-md-4 col-12 mb-md-0 mb-3">
        <div class="d-flex justify-content-between flex-column mb-2 mb-md-0">
          <ul class="nav nav-align-left nav-pills flex-column">
            <li class="nav-item">
              <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#payment">
                <i class="mdi mdi-credit-card-outline me-1"></i>
                <span class="align-middle">Website Kami</span>
              </button>
            </li>
            <li class="nav-item">
              <button class="nav-link" data-bs-toggle="tab" data-bs-target="#delivery">
                <i class="mdi mdi-desktop-classic me-1"></i>
                <span class="align-middle">Menu website</span>
              </button>
            </li>
          </ul>
          <div class="d-none d-md-block">
            <div class="mt-5 text-center">
              <img
                src="../../assets/img/illustrations/faq-illustration.png"
                class="img-fluid w-px-120"
                alt="FAQ Image" />
            </div>
          </div>
        </div>
      </div>
      <!-- /Navigation -->

      <!-- FAQ's -->
      <div class="col-lg-9 col-md-8 col-12">
        <div class="tab-content p-0">

          <div class="tab-pane fade show active" id="payment" role="tabpanel">
            <div class="d-flex mb-3 gap-3">
              <div class="avatar">
                <div class="avatar-initial bg-label-primary rounded">
                  <i class="mdi mdi-credit-card-outline mdi-24px"></i>
                </div>
              </div>
              <div>
                <h5 class="mb-0">
                  <span class="align-middle">Website kami!</span>
                </h5>
                <small>Pertanyaan tentang website!</small>
              </div>
            </div>
            <div id="accordionPayment" class="accordion">
              <div class="accordion-item active">
                <h2 class="accordion-header">
                  <button
                    class="accordion-button"
                    type="button"
                    data-bs-toggle="collapse"
                    aria-expanded="true"
                    data-bs-target="#accordionPayment-1"
                    aria-controls="accordionPayment-1">
                    Apa itu website pkm uhamka?
                  </button>
                </h2>

                <div id="accordionPayment-1" class="accordion-collapse collapse show">
                  <div class="accordion-body">
                    Website ini diperuntukan untuk mahasiswa yang mengusulkan usulan Program Kreatifitas Mahasiswa di Universitas Muhammdiyah Prof.Dr.Hamka, 
                    website ini akan menilai usulan anda, memperbaiki usulan anda, memperoleh sertifikat PKM UHAMKA, dan rekomendasi usulan (Pembiayaan internal atau Seleksi Kemendikbudristek).
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#accordionPayment-2"
                    aria-controls="accordionPayment-2">
                    Fitur apa saja di website ini?
                  </button>
                </h2>
                <div id="accordionPayment-2" class="accordion-collapse collapse">
                  <div class="accordion-body">
                    Website ini terdiri dari banyak fitur : <br>
                    1. Mengirim usulan <br>
                    2. Mengunduh nilai dari hampir setiap tahapan <br>
                    3. Sertifikat partisipasi PKM <br>
                    4. Informasi terkait PKM <br>
                    5. Mengubah passwort <br>
                    6. Status usulan <br>                                
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#accordionPayment-3"
                    aria-controls="accordionPayment-3">
                    Tutorial website
                  </button>
                </h2>
                <div id="accordionPayment-3" class="accordion-collapse collapse">
                  <div class="accordion-body">
                      <a href="https://www.youtube.com/watch?v=dxIG9JtakBM&ab_channel=WeirdGenius" target="_blank">
                          <button class="btn btn-primary btn-xs">Klik disini !</button>
                        </a>
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#accordionPayment-4"
                    aria-controls="accordionPayment-4">
                  Ketentuan kepemilikan akun website
                  </button>
                </h2>
                <div id="accordionPayment-4" class="accordion-collapse collapse">
                  <div class="accordion-body">
                    Akun pada website ini wajib digunakan untuk semua ketua kelompok pengusul untuk tingkat Universitas (sudah lolos seleksi dari tingkat fakultas), dan tidak diwajibkan untuk para anggota pengusul
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="tab-pane fade" id="delivery" role="tabpanel">
            <div class="d-flex mb-3 gap-3">
              <div class="avatar">
                <span class="avatar-initial bg-label-primary rounded">
                  <i class="mdi mdi-desktop-classic mdi-24px"></i>
                </span>
              </div>
              <div>
                <h5 class="mb-0">
                  <span class="align-middle">Menu website</span>
                </h5>
                <small>Penjelasan menu website</small>
              </div>
            </div>
            <div id="accordionDelivery" class="accordion">
              <div class="accordion-item active">
                <h2 class="accordion-header">
                  <button
                    class="accordion-button"
                    type="button"
                    data-bs-toggle="collapse"
                    aria-expanded="true"
                    data-bs-target="#accordionDelivery-1"
                    aria-controls="accordionDelivery-1">
                    Dashboard
                  </button>
                </h2>

                <div id="accordionDelivery-1" class="accordion-collapse collapse show">
                  <div class="accordion-body">
                    Fitur ini berisi identitas akun, tabel usulan, dan status usulan (jika sudah mengusulkan)
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#accordionDelivery-2"
                    aria-controls="accordionDelivery-2">
                    Informasi
                  </button>
                </h2>
                <div id="accordionDelivery-2" class="accordion-collapse collapse">
                  <div class="accordion-body">
                    Berisi semua informasi terkait PKM UHAMKA secara general !
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#accordionDelivery-3"
                    aria-controls="accordionDelivery-">
                    Usulan PKM kamu
                  </button>
                </h2>
                <div id="accordionDelivery-3" class="accordion-collapse collapse">
                  <div class="accordion-body">
                    Berisi usulan PKM anda, dimana anda dapat mengirim usulan -> usulan dinilai -> mendapat nilai & saran perbaikan -> peninjauan usulan -> Rekomendasi usulan
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button
                      class="accordion-button collapsed"
                      type="button"
                      data-bs-toggle="collapse"
                      data-bs-target="#accordionDelivery-4"
                      aria-controls="accordionDelivery-4">
                      Sertifikat PKM
                    </button>
                  </h2>
                  <div id="accordionDelivery-4" class="accordion-collapse collapse">
                    <div class="accordion-body">
                      Kamu dapat menunduh sertifikat PKM, jika kamu telah dinilai sudah mengikuti PKM di tingkat universitas.
                    </div>
                  </div>
              </div>

              <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button
                      class="accordion-button collapsed"
                      type="button"
                      data-bs-toggle="collapse"
                      data-bs-target="#accordionDelivery-5"
                      aria-controls="accordionDelivery-5">
                      Akun
                    </button>
                  </h2>
                  <div id="accordionDelivery-5" class="accordion-collapse collapse">
                    <div class="accordion-body">
                    Berisi identitas akun kamu, tetapi kamu hanya dapat mengubah password saja, dan tidak dapat mengubah identitas kamu! <br>
                    Jika kamu ingin mengubah identitas, maka kamu harus menghubungi admin PKM UHAMKA
                    </div>
                  </div>
              </div>

              <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button
                      class="accordion-button collapsed"
                      type="button"
                      data-bs-toggle="collapse"
                      data-bs-target="#accordionDelivery-5"
                      aria-controls="accordionDelivery-5">
                      Akun
                    </button>
                  </h2>
                  <div id="accordionDelivery-5" class="accordion-collapse collapse">
                    <div class="accordion-body">
                    Berisi identitas akun kamu, tetapi kamu hanya dapat mengubah password saja, dan tidak dapat mengubah identitas kamu! <br>
                    Jika kamu ingin mengubah identitas, maka kamu harus menghubungi admin PKM UHAMKA
                    </div>
                  </div>
              </div>

              <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button
                      class="accordion-button collapsed"
                      type="button"
                      data-bs-toggle="collapse"
                      data-bs-target="#accordionDelivery-5"
                      aria-controls="accordionDelivery-5">
                      FAQ
                    </button>
                  </h2>
                  <div id="accordionDelivery-5" class="accordion-collapse collapse">
                    <div class="accordion-body">
                    Kamu dapat mencari jawaban atas pertanyaan kamu !
                    </div>
                  </div>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="cancellation" role="tabpanel">
            <div class="d-flex mb-3 gap-3">
              <div class="avatar">
                <span class="avatar-initial bg-label-primary rounded">
                  <i class="mdi mdi-reload mdi-24px"></i>
                </span>
              </div>
              <div>
                <h5 class="mb-0"><span class="align-middle">Cancellation & Return</span></h5>
                <small>Lorem ipsum, dolor sit amet.</small>
              </div>
            </div>
            <div id="accordionCancellation" class="accordion">
              <div class="accordion-item active">
                <h2 class="accordion-header">
                  <button
                    class="accordion-button"
                    type="button"
                    data-bs-toggle="collapse"
                    aria-expanded="true"
                    data-bs-target="#accordionCancellation-1"
                    aria-controls="accordionCancellation-1">
                    Can I cancel my order?
                  </button>
                </h2>

                <div id="accordionCancellation-1" class="accordion-collapse collapse show">
                  <div class="accordion-body">
                    <p>
                      Scheduled delivery orders can be cancelled 72 hours prior to your selected delivery date
                      for full refund.
                    </p>
                    <p class="mb-0">
                      Parcel delivery orders cannot be cancelled, however a free return label can be provided
                      upon request.
                    </p>
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#accordionCancellation-2"
                    aria-controls="accordionCancellation-2">
                    Can I return my product?
                  </button>
                </h2>
                <div id="accordionCancellation-2" class="accordion-collapse collapse">
                  <div class="accordion-body">
                    You can return your product within 15 days of delivery, by contacting our
                    <a href="javascript:void(0);">support team</a>, All merchandise returned must be in the
                    original packaging with all original items.
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    aria-controls="accordionCancellation-3"
                    data-bs-target="#accordionCancellation-3">
                    Where can I view status of return?
                  </button>
                </h2>
                <div id="accordionCancellation-3" class="accordion-collapse collapse">
                  <div class="accordion-body">
                    <p>Locate the item from Your <a href="javascript:void(0);">Orders</a></p>
                    <p class="mb-0">Select <span class="fw-medium">Return/Refund</span> status</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="orders" role="tabpanel">
            <div class="d-flex mb-3 gap-3">
              <div class="avatar">
                <span class="avatar-initial bg-label-primary rounded">
                  <i class="mdi mdi-wallet-giftcard mdi-24px"></i>
                </span>
              </div>
              <div>
                <h5 class="mb-0">
                  <span class="align-middle">My Orders</span>
                </h5>
                <small>Lorem ipsum, dolor sit amet.</small>
              </div>
            </div>
            <div id="accordionOrders" class="accordion">
              <div class="accordion-item active">
                <h2 class="accordion-header">
                  <button
                    class="accordion-button"
                    type="button"
                    data-bs-toggle="collapse"
                    aria-expanded="true"
                    data-bs-target="#accordionOrders-1"
                    aria-controls="accordionOrders-1">
                    Has my order been successful?
                  </button>
                </h2>

                <div id="accordionOrders-1" class="accordion-collapse collapse show">
                  <div class="accordion-body">
                    <p>
                      All successful order transactions will receive an order confirmation email once the
                      order has been processed. If you have not received your order confirmation email within
                      24 hours, check your junk email or spam folder.
                    </p>
                    <p class="mb-0">
                      Alternatively, log in to your account to check your order summary. If you do not have a
                      account, you can contact our Customer Care Team on
                      <span class="fw-medium">1-000-000-000</span>.
                    </p>
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#accordionOrders-2"
                    aria-controls="accordionOrders-2">
                    My Promotion Code is not working, what can I do?
                  </button>
                </h2>
                <div id="accordionOrders-2" class="accordion-collapse collapse">
                  <div class="accordion-body">
                    If you are having issues with a promotion code, please contact us at
                    <span class="fw-medium">1 000 000 000</span> for assistance.
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#accordionOrders-3"
                    aria-controls="accordionOrders-3">
                    How do I track my Orders?
                  </button>
                </h2>
                <div id="accordionOrders-3" class="accordion-collapse collapse">
                  <div class="accordion-body">
                    <p>
                      If you have an account just sign into your account from
                      <a href="javascript:void(0);">here</a> and select
                      <span class="fw-medium">“My Orders”</span>.
                    </p>
                    <p class="mb-0">
                      If you have a a guest account track your order from
                      <a href="javascript:void(0);">here</a> using the order number and the email address.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="product" role="tabpanel">
            <div class="d-flex mb-3 gap-3">
              <div class="avatar">
                <span class="avatar-initial bg-label-primary rounded">
                  <i class="mdi mdi-cog-outline mdi-24px"></i>
                </span>
              </div>
              <div>
                <h5 class="mb-0">
                  <span class="align-middle">Product & Services</span>
                </h5>
                <small>Lorem ipsum, dolor sit amet.</small>
              </div>
            </div>
            <div id="accordionProduct" class="accordion">
              <div class="accordion-item active">
                <h2 class="accordion-header">
                  <button
                    class="accordion-button"
                    type="button"
                    data-bs-toggle="collapse"
                    aria-expanded="true"
                    data-bs-target="#accordionProduct-1"
                    aria-controls="accordionProduct-1">
                    Will I be notified once my order has shipped?
                  </button>
                </h2>

                <div id="accordionProduct-1" class="accordion-collapse collapse show">
                  <div class="accordion-body">
                    Yes, We will send you an email once your order has been shipped. This email will contain
                    tracking and order information.
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#accordionProduct-2"
                    aria-controls="accordionProduct-2">
                    Where can I find warranty information?
                  </button>
                </h2>
                <div id="accordionProduct-2" class="accordion-collapse collapse">
                  <div class="accordion-body">
                    We are committed to quality products. For information on warranty period and warranty
                    services, visit our Warranty section <a href="javascript:void(0);">here</a>.
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#accordionProduct-3"
                    aria-controls="accordionProduct-3">
                    How can I purchase additional warranty coverage?
                  </button>
                </h2>
                <div id="accordionProduct-3" class="accordion-collapse collapse">
                  <div class="accordion-body">
                    For the peace of your mind, we offer extended warranty plans that add additional year(s)
                    of protection to the standard manufacturer’s warranty provided by us. To purchase or find
                    out more about the extended warranty program, visit Extended Warranty section
                    <a href="javascript:void(0);">here</a>.
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /FAQ's -->
    </div>

    <!-- Contact -->
    <div class="row mt-5">
      <div class="col-12 text-center mb-3">
        <h5 class="my-3">Masih memiliki pertanyaan atau kendala teknis?</h5>
        <p>Silahkan hubungi kami via whatsapp & email</p>
      </div>
    </div>
    <div class="row justify-content-center gap-sm-0 gap-3">
      <div class="col-sm-6">
        <div class="py-3 rounded bg-faq-section d-flex align-items-center flex-column">
          <div class="avatar">
            <span class="avatar-initial bg-label-secondary rounded">
              <i class="mdi mdi-phone mdi-24px"></i>
            </span>
          </div>
          <h5 class="mt-3"><a class="text-heading" href="tel:+(810)25482568">+ (810) 2548 2568</a></h5>
          <p>We are always happy to help</p>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="py-3 rounded bg-faq-section d-flex align-items-center flex-column">
          <div class="avatar">
            <span class="avatar-initial bg-label-secondary rounded">
              <i class="mdi mdi-email-outline mdi-24px"></i>
            </span>
          </div>
          <h5 class="mt-3"><a class="text-heading" href="mailto:help@help.com">help@help.com</a></h5>
          <p>Best way to get a quick answer</p>
        </div>
      </div>
    </div>
    <!-- /Contact -->
  </div>
  <!--/ Content -->

  @section('javascript')
    <!-- Vendors JS -->
    <script src="{{ url('assets/vendor/libs/apex-charts/apexcharts.js') }}"></script>
    <script src="{{ url('assets/vendor/libs/swiper/swiper.js') }}"></script>

    <!-- Main JS -->
    <script src="{{ url('assets/js/main.js') }}"></script>

    <!-- Page JS -->
    <script src="{{ url('assets/js/dashboards-analytics.js') }}"></script>

    <!-- DataTables  & Plugins -->
    <script src="{{ url('dist2/plugins/datatables/jquery.dataTables.js') }}"></script>
    <script src="{{ url('dist2/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ url('dist2/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ url('dist2/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ url('dist2/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ url('dist2/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ url('dist2/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ url('dist2/plugins/jszip/jszip.min.js') }}"></script>
    <script src="{{ url('dist2/plugins/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ url('dist2/plugins/pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ url('dist2/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ url('dist2/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ url('dist2/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>

    <!-- Page JS -->
    <script src="{{ url('dist2/plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}"></script>
    <script src="{{ url('assets/vendor/libs/sweetalert2/sweetalert2.js') }}"></script>

    <script>
      $(function () {
        $('#example1')
          .DataTable({
            responsive: true,
            lengthChange: false,
            autoWidth: false,
            searching: false
          })
          .buttons()
          .container()
          .appendTo('#example1_wrapper .col-md-6:eq(0)');
      });
    </script>
  @endsection

@endsection
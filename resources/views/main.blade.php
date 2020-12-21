@extends('layouts.app')
@section('title', 'title name')

{{-- 아래는 진행 예정 --}}
@section('redircetPage')
    @include('layouts.user')
@endsection

@section('style')
  
@endsection

@section( 'content')

    <!-- ======= Hero Section ======= -->
  <section id="silver" class="d-flex flex-column justify-content-center">
    <div class="container" data-aos="zoom-in" data-aos-delay="100">
      <h1>Han HyeEun</h1>
      <p>I'm <span class="typed" data-typed-items="Developer"></span></p>
      <div class="social-links">
        <a href="https://www.facebook.com/profile.php?id=100014546653589" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="https://www.instagram.com/_sunsilver/" class="instagram"><i class="bx bxl-instagram"></i></a>
      </div>
    </div>
  </section><!-- End Hero -->

  <!-- ======= About Section ======= -->
  <section id="about" class="about">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>About</h2>
        <p class="jp">私はヨンジン専門大学のウェブデーターベースを専攻している4 年生のハン・ヘウンと申します。
          私の長所は、ゴールまでの道筋を立て、着実に努力し続けられるところです。計画性
          柔軟性の両方を組み合わせて努力する習慣を身に着けたおかげで、短期間で日本語の実力を伸ばしたり、複数のポジションでの開発にチャレンジしてやり遂げるなどの結果を出すことができました。また、チームの中では、常に周りにポジティブなエネルギーを与えることができます。
          今後も、この強みを活かして、やったことがない事や、達成が難しいと思えるようなことでも、積極的にチャレンジし、チームを率いる人になって会社に貢献していきたいです。
          </p>
      </div>

      <div class="row">
        <div class="col-lg-4">
          <img src="{{ asset('img/hhe1.jpg') }}" class="img-fluid" alt="">
        </div>
        <div class="col-lg-8 pt-4 pt-lg-0 content">
          <h3 style="margin-top: 2%;">Web Developer.</h3>
          <p class="font-italic jp">
            ITで新しい価値を創造して世界を変える！ ハン·ヘウンと申します！
          </p>
          <div class="row" >
            <div class="col-lg-6" style="margin-top: 2%;">
              <ul>
                <li><i class="icofont-rounded-right"></i> <strong>Birthday:</strong> 19 January 1998</li>
                <li><i class="icofont-rounded-right"></i> <strong>Phone:</strong> +82 (0)10-2258-0119</li>
                <li><i class="icofont-rounded-right"></i> <strong>City:</strong> Korea</li>
              </ul>
            </div>
            <div class="col-lg-6" style="margin-top: 2%;">
              <ul>
                <li><i class="icofont-rounded-right"></i> <strong>Age:</strong> 23</li>
                <li><i class="icofont-rounded-right"></i> <strong>Degree:</strong> Bachelor</li>
                <li><i class="icofont-rounded-right"></i> <strong>PhEmailone:</strong> jk05221@naver.com</li>
              </ul>
            </div>
          </div>
          <p class="wf-sawarabigothic jp">
            私は人々の生活をより便利にする仕事がしたいです。第4次産業革命と言われている現在、それはITで実現できると確信しています。 忙しい現代人が、一日をより価値あるものにするための環境を提供するサービスを開発することが目標です。世の中の人々がITを難しく考えずに、気軽に近づけるサービスを作りたいと考えています。
          </p>
        </div>
      </div>

    </div>
  </section><!-- End About Section -->

  <!-- ======= Skills Section ======= -->
  <section id="skills" class="skills section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Skills</h2>
        <p class="wf-sawarabigothic">卒業プロジェクトでは、データベースの構築と、 php と laravel と python を活用したウェブ開発を担当しました。</p>
      </div>

      <div class="row skills-content">

        <div class="col-lg-6">

          <div class="progress">
            <span class="skill">HTML <i class="val">100%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

          <div class="progress">
            <span class="skill">CSS <i class="val">90%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

          <div class="progress">
            <span class="skill">JavaScript <i class="val">75%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

        </div>

        <div class="col-lg-6">

          <div class="progress">
            <span class="skill">PHP <i class="val">90%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

          <div class="progress">
            <span class="skill">Laravel <i class="val">90%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

          <div class="progress">
            <span class="skill">Python <i class="val">60%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

        </div>

      </div>

    </div>
  </section><!-- End Skills Section -->

  <!-- ======= Resume Section ======= -->
  <section id="resume" class="resume">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Career</h2>
        <p class="jp">ALL Wiz マインドをもって、エンジニアとしてどんどん成長し、私の成長を通じて会社に貢献したいです。</p>
      </div>

      <div class="row jp">
        <div class="col-lg-6">
          <h3 class="resume-title">1年目の目標</h3>
          <div class="resume-item pb-0">
            <h4>早く仕事に慣れて、エンジニアとしての能力発揮</h4>
            <h5>2021</h5>
            <p>最も自信のあるWebサーバーの開発を担当しながら、プロジェクトや企画の全体的な流れを把握することです。初めは、少し時間がかかるかもしれませんが、様々な開発環境やツールを身につけて、早く仕事に慣れるように努力します。 そのうえで、 バックエンドの開発者としての能力を発揮しながら、UI・UXデザインにも積極的な意見を出してみたいです。</p>
          </div>

          <h3 class="resume-title">2、3年目の目標</h3>
          <div class="resume-item">
            <h4>専門性をもって、色んなプロントエンドに参加</h4>
            <h5>2022 - 2023</h5>
            <p>固めた基礎を持ってバックエンドエンジニアとしての専門性を持つことです。技術力のある先輩方と一緒に様々な技術力を積みたいと思います。</p>
          </div>
          
        </div>
        <div class="col-lg-6">
          <h3 class="resume-title">5年目の目標</h3>
          <div class="resume-item">
            <h4>全体を把握するエンジニア</h4>
            <h5>2025 - 2030</h5>
            <ul>
              <p>エンジニアとしての技術力をどんどん向上させながら、ユーザーのニーズを分析して、良いアイデアや 事業を提案し、自分の手で作るサービスを実現してみたいです。企画段階から実装まで、専門性をもちながらも、幅広く活躍できるエンジニアになることが目標です。</p>
            </ul>
          </div>
          <div class="resume-item">
            <h4>チームを率いるリーダーになります。</h4>
            <ul>
              <p>チームメンバーの話を真剣に聞くリーダーになります。 私の長所であるコミュニケーション能力を生かして、メンバが自分の意見を表現しやすい雰囲気を作ります。 今までのノウハウを後輩たちに教え、後輩育成にも力を入れます.</p>
            </ul>
          </div>
        </div>
      </div>

    </div>
  </section><!-- End Resume Section -->
  
  <!-- ======= Portfolio Section ======= -->
  <section id="portfolio" class="portfolio section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Portfolio</h2>
        <h5 class="jp">* 詳細情報は提出したポートフォリオをご確認ください！ *</h5>
        <p class="wf-sawarabigothic jp">大学時代には、良いシステムを作り上げるためには、自分の担当分野だけでなく、 プロジェクトの全体的な流れを把握することの重要性を感じ、フロントエンドから
          バックエンドまで幅広いポジションを積極的に経験しました。これまでの <span style='"Open Sans", sans-serif'> php 、laravel 、 python </span> などを使ったプロジェクトの経験を活かして会社に貢献しながら、
          自分が新たに学んだことは、積極的に周りにも発信していきたいと思います。
          </p>
      </div>

      <div class="row">
        <div class="col-lg-12 d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
          <ul id="portfolio-flters">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-app" class="wf-sawarabigothic">釣り針</li>
            <li data-filter=".filter-card" class="wf-sawarabigothic">述べるノベル</li>
            <li data-filter=".filter-web" class="wf-sawarabigothic">プランナー</li>
          </ul>
        </div>
      </div>

      <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <img src="{{ asset('img/turi.png') }}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>WEB 1</h4>
              <p>WEB</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-wrap">
            <img src="{{ asset('img/planner.png') }}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Web 3</h4>
              <p>Web</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <img src="{{ asset('img/turi2.png') }}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>WEB 1</h4>
              <p>WEB</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <div class="portfolio-wrap">
            <img src="{{ asset('img/noberu.png') }}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>WEB 2</h4>
              <p>WEB</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-wrap">
            <img src="{{ asset('img/planner2.png') }}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Web 3</h4>
              <p>Web</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <img src="{{ asset('img/turi3.png') }}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>WEB 1</h4>
              <p>WEB</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <div class="portfolio-wrap">
            <img src="{{ asset('img/noberu4.png') }}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>WEB 2</h4>
              <p>WEB</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <div class="portfolio-wrap">
            <img src="{{ asset('img/noberu3.png') }}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>WEB 2</h4>
              <p>WEB</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-wrap">
            <img src="{{ asset('img/planner3.png') }}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Web 3</h4>
              <p>Web</p>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Portfolio Section -->

  <!-- ======= Services Section ======= -->
  <section id="services" class="services">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2 class="wf-sawarabigothic">Strength</h2>
        {{-- <p class="wf-sawarabigothic">周りから見た私は！</p> --}}
      </div>

      <div class="row jp">

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
          <div class="icon-box iconbox-blue">
            <div class="icon">
              <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,521.0016835830174C376.1290562159157,517.8887921683347,466.0731472004068,529.7835943286574,510.70327084640275,468.03025145048787C554.3714126377745,407.6079735673963,508.03601936045806,328.9844924480964,491.2728898941984,256.3432110539036C474.5976632858925,184.082847569629,479.9380746630129,96.60480741107993,416.23090153303,58.64404602377083C348.86323505073057,18.502131276798302,261.93793281208167,40.57373210992963,193.5410806939664,78.93577620505333C130.42746243093433,114.334589627462,98.30271207620316,179.96522072025542,76.75703585869454,249.04625023123273C51.97151888228291,328.5150500222984,13.704378332031375,421.85034740162234,66.52175969318436,486.19268352777647C119.04800174914682,550.1803526380478,217.28368757567262,524.383925680826,300,521.0016835830174"></path>
              </svg>
              <i class="bx bxl-dribbble"></i>
            </div>
            <h4 class="wf-sawarabigothic"><a href="">コミュニケーション能力</a></h4>
            <p class="wf-sawarabigothic">雰囲気作りとリアクションが上手で、人とのコミュニケーションを盛り上げるのが得意です</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
          <div class="icon-box iconbox-orange ">
            <div class="icon">
              <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,582.0697525312426C382.5290701553225,586.8405444964366,449.9789794690241,525.3245884688669,502.5850820975895,461.55621195738473C556.606425686781,396.0723002908107,615.8543463187945,314.28637112970534,586.6730223649479,234.56875336149918C558.9533121215079,158.8439757836574,454.9685369536778,164.00468322053177,381.49747125262974,130.76875717737553C312.15926192815925,99.40240125094834,248.97055460311594,18.661163978235184,179.8680185752513,50.54337015887873C110.5421016452524,82.52863877960104,119.82277516462835,180.83849132639028,109.12597500060166,256.43424936330496C100.08760227029461,320.3096726198365,92.17705696193138,384.0621239912766,124.79988738764834,439.7174275375508C164.83382741302287,508.01625554203684,220.96474134820875,577.5009287672846,300,582.0697525312426"></path>
              </svg>
              <i class="bx bx-file"></i>
            </div>
            <h4 class="wf-sawarabigothic"><a href="">計画性と柔軟さで目標達成</a></h4>
            <p class="wf-sawarabigothic">ゴールまでの道筋を立て、着実に目標を達成します。状況に合わせて柔軟に予定を変更したり「まずやってみる」という行動力もあります。
            </p>
            
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
          <div class="icon-box iconbox-pink">
            <div class="icon">
              <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,503.46388370962813C374.79870501325706,506.71871716319447,464.8034551963731,527.1746412648533,510.4981551193396,467.86667711651364C555.9287308511215,408.9015244558933,512.6030010748507,327.5744911775523,490.211057578863,256.5855673507754C471.097692560561,195.9906835881958,447.69079081568157,138.11976852964426,395.19560036434837,102.3242989838813C329.3053358748298,57.3949838291264,248.02791733380457,8.279543830951368,175.87071277845988,42.242879143198664C103.41431057327972,76.34704239035025,93.79494320519305,170.9812938413882,81.28167332365135,250.07896920659033C70.17666984294237,320.27484674793965,64.84698225790005,396.69656628748305,111.28512138212992,450.4950937839243C156.20124167950087,502.5303643271138,231.32542653798444,500.4755392045468,300,503.46388370962813"></path>
              </svg>
              <i class="bx bx-layer"></i>
            </div>
            <h4 class="wf-sawarabigothic"><a href="">全体的な流れを理解
            </a></h4>
            <p class="wf-sawarabigothic">サイトマップ、フローチャートを活用して全体的な流れを理解する習慣を身につけています。
            </p>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Services Section -->

  <!-- ======= Testimonials Section ======= -->
  <section id="testimonials" class="testimonials section-bg jp">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Testimonials</h2>
      </div>

      <div class="owl-carousel testimonials-carousel" data-aos="zoom-in" data-aos-delay="100">

        <div class="testimonial-item">
          <img class="testimonial-img" src="{{ asset('img/bo.jpg') }}">
          <h3>キム·ボリョン</h3>
          <h4>( 23歳 / 学生 )</h4>
          <p>
            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
            周りの人の話を耳を聞かせて聞いてくれる人。コミュニケーションするときのリアクションも良くて、悩みがあったら真剣に悩んでくれるから色々相談することができます。
            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
          </p>
        </div>

        <div class="testimonial-item">
          <img src="{{ asset('img/dojun.jpg') }}" class="testimonial-img" alt="">
          <h3>キム·ドジュン</h3>
          <h4>( 24歳 / 学生 )</h4>
          <p>
            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
            一緒に話すとき、私が言うことをちゃんと聞いて相づちとか笑って答えてくれることからエネルギーをたくさんもらいます。ポジティブな性格で周りを明るくする人だと思います。
            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
          </p>
        </div>

        <div class="testimonial-item">
          <img class="testimonial-img" src="{{ asset('img/somin.jpg') }}">
          <h3>キム·ソミン</h3>
          <h4>( 27歳 / 会社員 )</h4>
          <p>
            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
            「いつも明るく、相手のテンションを上げる人だ」とよく言われます。その理由は、プロジェクトで疲れていた時、チームメンバーが元気を出されるため、いつも笑顔で頑張ろうと応援したからです。
            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
          </p>
        </div>

        <div class="testimonial-item" >
          <img class="testimonial-img" src="{{ asset('img/channel.jpg') }}">
          <h3>キム·ウンチェ</h3>
          <h4>( 23歳 / 会社員 )</h4>
          <p>
            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
            人より速度が少し遅くなっても焦らず自分のペースを守りながら最善を尽くしていつも完成度高い結果を出してきました
。「毎日コツコツ」を身につけている人です。
            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
          </p>
        </div>

        <div class="testimonial-item">
          <img class="testimonial-img" src="{{ asset('img/hong.jpg') }}">
          <h3>イ·ホンジュ</h3>
          <h4>( 24歳 / 学生 )</h4>
          <p>
            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
            社交性があり、コミュニケーション能力が高い人です。その理由は人見知りでまだ友達がいなかった私に先に話しかけてくれてそこからすぐ友達になれたからです！
            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
          </p>
        </div>

      </div>

    </div>
  </section><!-- End Testimonials Section -->

@endsection


@section('script')


@endsection

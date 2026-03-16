<?php
class HTML {
	/** @var string */ public $title;
	/** @var string */ public $active;
	/** @var string */ public $lang;
	/** @var ?object */ public $translator;

	public function __construct(
		string $title,
		string $active,
		string $lang = 'en',
		?object $translator = null
	) {
		$this->title = $title;
		$this->active = $active;
		$this->lang = $lang;
		$this->translator = $translator;
		ob_start();
	}

	public function __destruct() {
		$output = ob_get_clean();

		ob_start();
		?>

<!DOCTYPE html>
<html lang="<?= $this->lang ?>">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="robots" content="noindex, nofollow">

    <!-- PWA Manifest -->
    <!-- <link rel="manifest" href="/site.webmanifest"> -->

    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="shortcut icon" href="/favicon.ico">

    <!-- Apple Touch Icon -->
    <link rel="apple-touch-icon" href="/apple-touch-icon.png" sizes="180x180">

    <title><?= $this->title ?></title>

    <link href="/src/styles/tailwind.css" rel="stylesheet" />
    <link href="/src/styles/global.scss" rel="stylesheet" />
</head>

<body class="overflow-x-hidden">

    <div x-data="{ isLoading: true }" x-init="setTimeout(() => { isLoading = false }, 200);">
        <!-- Loader -->
        <div x-show="isLoading"
            class="bb-loader fixed left-0 top-0 z-[999999] flex h-screen w-full min-w-full items-center justify-center bg-white">
            <img src="%BASE%/img/loader.png" alt="loader" class="absolute">
            <span class="loader relative size-[60px]"></span>
        </div>
        <?php
        $active = $this->active;
        $lang = $this->lang;
        $translator = $this->translator;
        $t = $translator
        	? function (string $key) use ($translator) {
        		return $translator->trans($key);
        	}
        	: function (string $key) {
        		return $key;
        	};
        include 'partials/header.php';
        ?>
        <!-- Page content -->
        <?= $output ?>
        <!-- Contact form -->
        <?php require_existing(
        	'partials/components/contactform-component.php',
        ); ?>
        <!-- Footer -->
        <?php require_existing('partials/footer.php'); ?>
    </div>
    <!-- Back to top  -->
    <a href="#Top" data-cursor-text="Click"
        class="back-to-top result-placeholder transition-all duration-[0.3s] ease-in-out w-[38px] h-[38px] hidden fixed right-[15px] bottom-[15px] z-[10] rounded-[20px] cursor-pointer bg-[#fff] text-[#6c7fd8] border-[1px] border-solid border-[#6c7fd8] text-center text-[22px] leading-[1.6]">
        <img class="width-[20px] height-[20px]" src="%BASE%/img/arrow-up-line.svg" alt="">
        <div class="back-to-top-wrap active-progress">
            <svg viewBox="-1 -1 102 102" class="w-[36px] h-[36px] fixed right-[16px] bottom-[16px]">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
                    class="fill-transparent stroke-[8px] stroke-primary">
                </path>
            </svg>
        </div>
    </a>
    <script src="/src/scripts/main.js" type="module"></script>
</body>

</html>

<?php die(ob_get_clean());
	}
}

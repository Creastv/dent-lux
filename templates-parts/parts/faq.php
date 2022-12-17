<?php 
$faq = get_field('najczesciej_zadawane_pytania');
?>

<section id="faq">

    <div class="faq js">
        <div itemscope="" itemtype="https://schema.org/FAQPage">
            <?php $i = 1; while( have_rows('najczesciej_zadawane_pytania') ): the_row(); 
                $pytanie = get_sub_field('pytanie');
                $odp = get_sub_field('odpowiedz');
                
            ?>
            <div class="accordion js <?php echo $active; ?>" itemscope="" itemprop="mainEntity" itemtype="https://schema.org/Question">
                <h3 class="question h5">
                    <span itemprop="name">
                        <?php echo  $i; ?>. <?php echo $pytanie; ?>
                    </span>
                    <svg width="16" height="10" viewBox="0 0 16 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M13.1733 1.3867L7.99997 6.56004L2.82664 1.3867C2.30664 0.866704 1.46664 0.866704 0.946641 1.3867C0.426641 1.9067 0.426641 2.7467 0.946641 3.2667L7.06664 9.3867C7.58664 9.9067 8.42664 9.9067 8.94664 9.3867L15.0666 3.2667C15.5866 2.7467 15.5866 1.9067 15.0666 1.3867C14.5466 0.880037 13.6933 0.866704 13.1733 1.3867Z" fill="black" />
                    </svg>
                </h3>
                <div itemscope="" itemprop="acceptedAnswer" itemtype="https://schema.org/Answer" class="answer">
                    <div itemprop="text">
                        <?php echo $odp; ?>
                    </div>
                </div>
            </div>
            <?php $i++; endwhile; ?>
        </div>
    </div>
</section>

<script>
const accordion = document.querySelectorAll(".faq .accordion");
for (i = 0; i < accordion.length; i++) {
    accordion[i].addEventListener("click", function(event) {
        let tmp = event.target.parentNode.parentNode;
        for (e = 0; e < accordion.length; e++) {

            if (accordion[e] == tmp) {
                accordion[e].classList.toggle("active");
            } else {
                accordion[e].classList.remove("active");
            }
        }
    });
    if (("#" + accordion[i].id) == window.location.hash) {
        accordion[i].classList.add("active");
    }
}
</script>

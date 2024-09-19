<section class="section popular-services popular-explore">
    <div class="container">
        <div class="section-heading" data-aos="fade-down">
            <h2>Explore Mechanics In {{ Auth::guard('mechanic')->user()->town_city.', '. Auth::guard('mechanic')->user()->state . ' State' }}</h2>
            <p>Find and review local mechanics in your area.</p>
        </div>


        <livewire:mechanic.components.home.mechanic />
    </div>
</section>

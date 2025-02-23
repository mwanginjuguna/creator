<?php

use Livewire\Volt\Volt;

it('can render', function () {
    $component = Volt::test('admin.marketing.campaigns');

    $component->assertSee('');
});

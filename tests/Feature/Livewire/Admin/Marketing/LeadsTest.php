<?php

use Livewire\Volt\Volt;

it('can render', function () {
    $component = Volt::test('admin.marketing.leads');

    $component->assertSee('');
});

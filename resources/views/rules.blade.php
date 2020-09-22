<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Rules
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 pb-14 sm:px-20 bg-white border-b border-gray-200">
                    <div class="mt-8 mb-6 text-2xl">
                        Rules of Jersey Bidding
                    </div>
                    <div>
                        <ul class="list-decimal list-outside">
                            <li class="mb-5">
                                There will be 4 rounds of Jersey Bidding
                                <ul class="list-decimal list-inside">
                                    <li>
                                        Round 1: For those who have played at least <u>3</u> IHG seasons.
                                    </li>
                                    <li>
                                        Round 2: For those who have played at least <u>2</u> IHG seasons.
                                    </li>
                                    <li>
                                        Round 3: For those who have played at least <u>1</u> IHG seasons.
                                    </li>
                                    <li>
                                        Round 4: For those who have yet to play an IHG season.
                                    </li>
                                </ul>
                            </li>
                            <li class="mb-5">
                                Bidding points will be calculated as follows:
                                <ul class="list-decimal list-inside">
                                    <li>
                                        Captain: 1 point
                                    </li>
                                    <li>
                                        Sport with minimum attendancce 70%: 1 point
                                    </li>
                                    <li>
                                        Made it through 1st cut: 1 point
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <div>
                            <h1 class="text-2xl mb-5">Notes</h1>
                            <ul class="list-decimal list-outside">
                                <li class="mb-5">
                                    Numbers will not be shared for those that are allocated numbers in Round 1 and 2. <br>
                                    For those in Round 2, they will have an option to share their number. The below rules will apply for the sharing of numbers:
                                    <ul class="list-decimal list-inside">
                                        <li>
                                            In the event that the points are the same, the top choice number will be given to a random person in the conflicting group. (If Tom, Jerry, and Moose put “20” as their top choice, the system will randomly select one of the 3 persons. The others will be given their 2nd choices)
                                        </li>
                                        <li>
                                            If numbers in Round 4 is insufficient, numbers in Round 3 will also be used (those who have played for at least 1 IHG may need to share number).
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    There will be no sharing of numbers in team sports:
                                    <ul class="list-decimal list-inside">
                                        <li>Basketball (Male, Female)</li>
                                        <li>Floorball (Male, Female)</li>
                                        <li>Frisbee (Mixed)</li>
                                        <li>Handball (Male, Female)</li>
                                        <li>Soccer (Male, Female)</li>
                                        <li>Softball (Mixed)</li>
                                        <li>Touch Rugby (Male, Female)</li>
                                        <li>Volleyball (Male, Female)</li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

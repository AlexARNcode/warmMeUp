<?php

# Get the user input (work load in kgs)
if (isset($_POST['userWorkLoad'])) {
    $workload = $_POST['userWorkLoad'];

    # Avoid JS hacking
    $workload = htmlspecialchars($workload);
}

# CALCULATION #
# Calculate 55% of the work load (1st warm up set)
$FirstWarmupSet = ($workload * 0.55);

# Calculate 70% of the work load (2nd warm up set)
$SecondWarmupSet = ($workload * 0.7);

# Calculate 80% of the work load (3rd warm up set)
$ThirdWarmupSet = ($workload * 0.8);

# Calculate 90% of the work load (4th warm up set)
$FourthWarmupSet = ($workload * 0.9);


# USER OUTPUT #

# Warmup set 0 #

echo "<p>Warm-Up set 1 : 15 reps with the empty bar.</p>";

# First Warmup set #
echo "<p>Warm-Up set 2 : 8 reps with " . $FirstWarmupSet . " kgs.</p>";

# Second Warmup set #
echo "<p>Warm-Up set 3 : 5 reps with " . $SecondWarmupSet . " kgs.</p>";

# Third Warmup set #
echo "<p>Warm-Up set 4 : 3 reps with " . $ThirdWarmupSet . " kgs.</p>";

# Fourth Warmup set #
echo "<p>Warm-Up set 5 : 1 rep with " . $FourthWarmupSet . " kgs.</p>";

?>

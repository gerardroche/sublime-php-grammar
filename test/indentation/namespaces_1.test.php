<?php

namespace NS1;
echo "Statement 1" . __NAMESPACE__ . "\n";
echo "Statement 2" . __NAMESPACE__ . "\n";

namespace NS1\Sub1;
use NS1;
echo "Statement 1" . __NAMESPACE__ . "\n";
echo "Statement 2" . __NAMESPACE__ . "\n";

namespace NS3\Sub2;
echo "Statement 1 " . __NAMESPACE__ . "\n";
echo "Statement 2 " . __NAMESPACE__ . "\n";
use NS1\Sub1 as NS1;
echo "Statement 3 " . __NAMESPACE__ . "\n";
echo "Statement 4 " . __NAMESPACE__ . "\n";

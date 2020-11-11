# Library-Recommendation-System
The Book Recommendation system as the name suggests is an application where
we perform classification,segregation,etc and suggest books to users from their
past and other books that are relevant. This report touches the basic introduction
to an Recommendation system


Technology to be used
-Jupyter Notebook
-Python (pandas,numpy,sklearn,matplotlib, etc)
-HTML,CSS,JS,Php,SQL

K Means
This is an iterative algorithm that does partition in the dataset into K already
defined unique non-overlapping clusters where every point belongs to a single
group.Then it will assign data points to a cluster such that the sum of the squared distance
between all points and the cluster’s centroid is at the least. The lesser the
variation within clusters, the more similar the data points are inside the same
cluster

These are the steps when k means is performed.
● Initially we mention number of clusters that is K.
● Then we initialize the centroids by first randomizing the dataset and then
selecting K data points for the centroids without any replacement.
● Keep iterating while change in centroids is occuring.
● Calculate sum of squared distance between points and all their centroids.
● Give each data point to the nearest centroid (clusters)
● Find the centroids for the clusters by averaging of all points that belong to
every cluster.

this was the flow of the project